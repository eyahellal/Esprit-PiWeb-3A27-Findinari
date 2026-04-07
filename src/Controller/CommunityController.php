<?php

namespace App\Controller;

use App\Entity\community\Commentaire;
use App\Entity\community\Like;
use App\Entity\community\Post;
use App\Entity\user\Utilisateur;
use App\form\CommentaireType;
use App\form\PostType;
use App\Repository\LikeRepository;
use App\Repository\PostRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/community')]
class CommunityController extends AbstractController
{
    private function getCurrentUtilisateur(UtilisateurRepository $utilisateurRepository, EntityManagerInterface $em): Utilisateur
    {
        $user = $utilisateurRepository->find(1);

        if (!$user) {
            $user = new Utilisateur();
            $user->setNom('Demo');
            $user->setPrenom('User');
            $user->setGmail('demo.community@findinari.local');
            $user->setMdp(password_hash('demo123', PASSWORD_BCRYPT));
            $user->setRole('USER');
            $user->setStatut('ACTIF');
            $em->persist($user);
            $em->flush();
        }

        return $user;
    }

    private function redirectBackToCommunity(Request $request, ?Post $post = null): RedirectResponse
    {
        $referer = (string) $request->headers->get('referer');
        if ($referer !== '' && str_contains($referer, '/community/post/')) {
            return $this->redirect($referer);
        }
        if ($post && $referer !== '' && str_contains($referer, '/service/4')) {
            return $this->redirect($referer);
        }
        if ($post && $referer !== '' && str_contains($referer, '/community')) {
            return $this->redirect($referer);
        }

        return $this->redirectToRoute('app_service_details', ['id' => 4]);
    }

    #[Route('/', name: 'community_index')]
    public function index(): RedirectResponse
    {
        return $this->redirectToRoute('app_service_details', ['id' => 4]);
    }

    #[Route('/post/create', name: 'community_post_create', methods: ['POST'])]
    public function createPost(Request $request, EntityManagerInterface $em, UtilisateurRepository $utilisateurRepository): Response
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $post->setUtilisateur($this->getCurrentUtilisateur($utilisateurRepository, $em));
            $post->setTypePost('STATUT');
            $post->setVisibilite('PUBLIC');
            $post->setStatut('ACTIF');
            $post->setTitre(null);
            $em->persist($post);
            $em->flush();

            $this->addFlash('success', 'Votre post a été publié.');
        } else {
            $this->addFlash('error', 'Le post n\'a pas été publié. Vérifiez le contenu saisi.');
        }

        return $this->redirectToRoute('app_service_details', ['id' => 4]);
    }

    #[Route('/post/{id}', name: 'community_show', requirements: ['id' => '\\d+'])]
    public function show(int $id, PostRepository $postRepository, Request $request, EntityManagerInterface $em, UtilisateurRepository $utilisateurRepository): Response
    {
        $post = $postRepository->find($id);
        if (!$post) {
            $fallback = $postRepository->findOneBy([], ['idPost' => 'DESC']);
            if ($fallback) {
                $this->addFlash('error', 'Post introuvable. Affichage du dernier post disponible.');
                return $this->redirectToRoute('community_show', ['id' => $fallback->getIdPost()]);
            }

            $currentUser = $this->getCurrentUtilisateur($utilisateurRepository, $em);
            $post = new Post();
            $post->setUtilisateur($currentUser);
            $post->setContenu('Bienvenue dans la communauté Fin Dinari. Publiez votre premier message ici.');
            $post->setTypePost('STATUT');
            $post->setVisibilite('PUBLIC');
            $post->setStatut('ACTIF');
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('community_show', ['id' => $post->getIdPost()]);
        }

        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository, $em);
        $commentaire = new Commentaire();
        $commentForm = $this->createForm(CommentaireType::class, $commentaire, [
            'action' => $this->generateUrl('community_comment_create', ['id' => $post->getIdPost()]),
            'method' => 'POST',
        ]);

        return $this->render('Community/show.html.twig', [
            'post' => $post,
            'commentForm' => $commentForm->createView(),
            'currentUser' => $currentUser,
        ]);
    }

    #[Route('/post/{id}/edit', name: 'community_edit', requirements: ['id' => '\\d+'])]
    public function editPost(int $id, PostRepository $postRepository, Request $request, EntityManagerInterface $em, UtilisateurRepository $utilisateurRepository): Response
    {
        $post = $postRepository->find($id);
        if (!$post) {
            throw $this->createNotFoundException('Post introuvable');
        }

        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository, $em);
        if (!$post->isOwnedBy($currentUser)) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas modifier ce post.');
        }

        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $post->setTitre(null);
            $em->flush();
            $this->addFlash('success', 'Post modifié avec succès.');

            return $this->redirectToRoute('community_show', ['id' => $post->getIdPost()]);
        }

        return $this->render('Community/edit.html.twig', [
            'form' => $form->createView(),
            'post' => $post,
        ]);
    }

    #[Route('/post/{id}/delete', name: 'community_delete', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function deletePost(int $id, PostRepository $postRepository, Request $request, EntityManagerInterface $em, UtilisateurRepository $utilisateurRepository): RedirectResponse
    {
        $post = $postRepository->find($id);
        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository, $em);

        if ($post && $post->isOwnedBy($currentUser) && $this->isCsrfTokenValid('delete_post_'.$post->getIdPost(), (string) $request->request->get('_token'))) {
            $em->remove($post);
            $em->flush();
            $this->addFlash('success', 'Post supprimé.');
        }

        return $this->redirectToRoute('app_service_details', ['id' => 4]);
    }

    #[Route('/post/{id}/like', name: 'community_like', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function toggleLike(int $id, PostRepository $postRepository, LikeRepository $likeRepository, UtilisateurRepository $utilisateurRepository, EntityManagerInterface $em, Request $request): RedirectResponse
    {
        $post = $postRepository->find($id);
        if (!$post) {
            throw $this->createNotFoundException('Post introuvable');
        }

        $user = $this->getCurrentUtilisateur($utilisateurRepository, $em);
        $existing = $likeRepository->findOneBy(['post' => $post, 'utilisateur' => $user]);

        if ($existing) {
            $em->remove($existing);
            $post->setNombreLikes(max(0, $post->getNombreLikes() - 1));
        } else {
            $like = new Like();
            $like->setPost($post);
            $like->setUtilisateur($user);
            $em->persist($like);
            $post->setNombreLikes($post->getNombreLikes() + 1);
        }

        $em->flush();

        return $this->redirectBackToCommunity($request, $post);
    }

    #[Route('/post/{id}/comment', name: 'community_comment_create', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function createComment(int $id, PostRepository $postRepository, Request $request, EntityManagerInterface $em, UtilisateurRepository $utilisateurRepository): RedirectResponse
    {
        $post = $postRepository->find($id);
        if (!$post) {
            throw $this->createNotFoundException('Post introuvable');
        }

        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setPost($post);
            $commentaire->setUtilisateur($this->getCurrentUtilisateur($utilisateurRepository, $em));
            $commentaire->setStatut('ACTIF');
            $post->setNombreCommentaires($post->getNombreCommentaires() + 1);
            $em->persist($commentaire);
            $em->flush();
            $this->addFlash('success', 'Commentaire ajouté.');
        } else {
            $this->addFlash('error', 'Impossible d\'ajouter le commentaire.');
        }

        return $this->redirectBackToCommunity($request, $post);
    }

    #[Route('/comment/{id}/edit', name: 'community_comment_edit', requirements: ['id' => '\\d+'])]
    public function editComment(int $id, Request $request, EntityManagerInterface $em, UtilisateurRepository $utilisateurRepository): Response
    {
        $commentaire = $em->getRepository(Commentaire::class)->find($id);
        if (!$commentaire) {
            throw $this->createNotFoundException('Commentaire introuvable');
        }

        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository, $em);
        if (!$commentaire->canBeManagedBy($currentUser)) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas modifier ce commentaire.');
        }

        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Commentaire modifié.');

            return $this->redirectToRoute('community_show', ['id' => $commentaire->getPost()?->getIdPost()]);
        }

        return $this->render('Community/edit_comment.html.twig', [
            'form' => $form->createView(),
            'commentaire' => $commentaire,
        ]);
    }

    #[Route('/comment/{id}/delete', name: 'community_comment_delete', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function deleteComment(int $id, Request $request, EntityManagerInterface $em, UtilisateurRepository $utilisateurRepository): RedirectResponse
    {
        $commentaire = $em->getRepository(Commentaire::class)->find($id);
        if (!$commentaire) {
            throw $this->createNotFoundException('Commentaire introuvable');
        }

        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository, $em);
        $post = $commentaire->getPost();

        if ($commentaire->canBeManagedBy($currentUser) && $this->isCsrfTokenValid('delete_comment_'.$commentaire->getIdCommentaire(), (string) $request->request->get('_token'))) {
            if ($post) {
                $post->setNombreCommentaires(max(0, $post->getNombreCommentaires() - 1));
            }
            $em->remove($commentaire);
            $em->flush();
            $this->addFlash('success', 'Commentaire supprimé.');
        }

        return $this->redirectBackToCommunity($request, $post);
    }

    #[Route('/test', name: 'community_test')]
    public function test(): Response
    {
        return new Response('Community routes OK');
    }
}
