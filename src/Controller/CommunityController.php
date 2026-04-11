<?php

namespace App\Controller;

use App\Entity\community\Like;
use App\Entity\community\Commentaire;
use App\Entity\community\Post;
use App\Entity\User\Utilisateur;
use App\Form\CommentaireType;
use App\Form\PostType;
use App\Repository\LikeRepository;
use App\Repository\PostRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/community', name: 'community_')]
class CommunityController extends AbstractController
{
    private function getCurrentUtilisateur(UtilisateurRepository $utilisateurRepository): Utilisateur
    {
        $securityUser = $this->getUser();

        if ($securityUser instanceof Utilisateur) {
            return $securityUser;
        }

        if ($securityUser && method_exists($securityUser, 'getUserIdentifier')) {
            $identifier = $securityUser->getUserIdentifier();

            $user = $utilisateurRepository->findOneBy(['gmail' => $identifier]);
            if ($user instanceof Utilisateur) {
                return $user;
            }
        }

        throw $this->createAccessDeniedException('Utilisateur non connecté.');
    }

    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(
        PostRepository $postRepository,
        UtilisateurRepository $utilisateurRepository
    ): Response {
        $posts = $postRepository->findBy([], ['idPost' => 'DESC']);
        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository);

        $post = new Post();
        $form = $this->createForm(PostType::class, $post, [
            'action' => $this->generateUrl('community_post_create'),
            'method' => 'POST',
        ]);

        return $this->render('Community/index.html.twig', [
            'posts' => $posts,
            'currentUser' => $currentUser,
            'postForm' => $form->createView(),
        ]);
    }

    #[Route('/post/create', name: 'post_create', methods: ['POST'])]
    public function createPost(
        Request $request,
        EntityManagerInterface $em,
        UtilisateurRepository $utilisateurRepository
    ): RedirectResponse {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $post->setUtilisateur($this->getCurrentUtilisateur($utilisateurRepository));
            $post->setTypePost('STATUT');
            $post->setVisibilite('PUBLIC');
            $post->setStatut('ACTIF');
            $post->setTitre($post->getTitre() ?: 'Publication');

            if (method_exists($post, 'setDateCreation') && $post->getDateCreation() === null) {
                $post->setDateCreation(new \DateTime());
            }

            if (method_exists($post, 'setDateModification')) {
                $post->setDateModification(new \DateTime());
            }

            $em->persist($post);
            $em->flush();

            $this->addFlash('success', 'Votre post a été publié.');
        } else {
            $this->addFlash('error', 'Le post n\'a pas été publié. Vérifiez le contenu saisi.');
        }

        return $this->redirectToRoute('community_index');
    }

    #[Route('/post/{id}', name: 'show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(
        int $id,
        PostRepository $postRepository,
        UtilisateurRepository $utilisateurRepository
    ): Response {
        $post = $postRepository->find($id);

        if (!$post) {
            throw $this->createNotFoundException('Post introuvable');
        }

        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository);
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

    #[Route('/post/{id}/edit', name: 'edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function edit(
        int $id,
        Request $request,
        PostRepository $postRepository,
        UtilisateurRepository $utilisateurRepository,
        EntityManagerInterface $em
    ): Response {
        $post = $postRepository->find($id);

        if (!$post) {
            throw $this->createNotFoundException('Post introuvable');
        }

        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository);

        if ($post->getUtilisateur()?->getId() !== $currentUser->getId()) {
            throw $this->createAccessDeniedException('Vous ne pouvez modifier que vos propres posts.');
        }

        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (method_exists($post, 'setDateModification')) {
                $post->setDateModification(new \DateTime());
            }

            $em->flush();
            $this->addFlash('success', 'Post modifié avec succès.');

            return $this->redirectToRoute('community_show', ['id' => $post->getIdPost()]);
        }

        return $this->render('Community/edit.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
            'currentUser' => $currentUser,
        ]);
    }

    #[Route('/post/{id}/delete', name: 'delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        PostRepository $postRepository,
        UtilisateurRepository $utilisateurRepository,
        EntityManagerInterface $em
    ): RedirectResponse {
        $post = $postRepository->find($id);

        if (!$post) {
            throw $this->createNotFoundException('Post introuvable');
        }

        $currentUser = $this->getCurrentUtilisateur($utilisateurRepository);

        if ($post->getUtilisateur()?->getId() !== $currentUser->getId()) {
            throw $this->createAccessDeniedException('Vous ne pouvez supprimer que vos propres posts.');
        }

        if (!$this->isCsrfTokenValid('delete_post_' . $post->getIdPost(), (string) $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide.');
        }

        $em->remove($post);
        $em->flush();

        $this->addFlash('success', 'Post supprimé.');

        return $this->redirectToRoute('community_index');
    }

    #[Route('/post/{id}/comment', name: 'comment_create', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function createComment(
        int $id,
        Request $request,
        PostRepository $postRepository,
        UtilisateurRepository $utilisateurRepository,
        EntityManagerInterface $em
    ): RedirectResponse {
        $post = $postRepository->find($id);

        if (!$post) {
            throw $this->createNotFoundException('Post introuvable');
        }

        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire, [
            'action' => $this->generateUrl('community_comment_create', ['id' => $post->getIdPost()]),
            'method' => 'POST',
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setPost($post);
            $commentaire->setUtilisateur($this->getCurrentUtilisateur($utilisateurRepository));
            $commentaire->setStatut('ACTIF');

            if (method_exists($commentaire, 'setDateCreation') && $commentaire->getDateCreation() === null) {
                $commentaire->setDateCreation(new \DateTime());
            }

            if (method_exists($commentaire, 'setDateModification')) {
                $commentaire->setDateModification(new \DateTime());
            }

            if (method_exists($post, 'setNombreCommentaires')) {
                $post->setNombreCommentaires(($post->getNombreCommentaires() ?? 0) + 1);
            }

            $em->persist($commentaire);
            $em->flush();

            $this->addFlash('success', 'Commentaire ajouté.');
        } else {
            $this->addFlash('error', 'Impossible d’ajouter le commentaire.');
        }

        return $this->redirectToRoute('community_show', ['id' => $post->getIdPost()]);
    }

    #[Route('/post/{id}/like', name: 'like', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function like(
        int $id,
        PostRepository $postRepository,
        UtilisateurRepository $utilisateurRepository,
        LikeRepository $likeRepository,
        EntityManagerInterface $em
    ): RedirectResponse {
        $post = $postRepository->find($id);

        if (!$post) {
            throw $this->createNotFoundException('Post introuvable');
        }

        $user = $this->getCurrentUtilisateur($utilisateurRepository);

        $existingLike = $likeRepository->findOneBy([
            'post' => $post,
            'utilisateur' => $user
        ]);

        if ($existingLike) {
            $em->remove($existingLike);

            if (method_exists($post, 'setNombreLikes')) {
                $post->setNombreLikes(max(0, ($post->getNombreLikes() ?? 0) - 1));
            }
        } else {
            $like = new Like();
            $like->setPost($post);
            $like->setUtilisateur($user);

            if (method_exists($like, 'setDateLike')) {
                $like->setDateLike(new \DateTime());
            }

            $em->persist($like);

            if (method_exists($post, 'setNombreLikes')) {
                $post->setNombreLikes(($post->getNombreLikes() ?? 0) + 1);
            }
        }

        $em->flush();

        return $this->redirectToRoute('community_show', ['id' => $post->getIdPost()]);
    }

    #[Route('/test', name: 'test', methods: ['GET'])]
    public function test(): Response
    {
        return new Response('Community routes OK');
    }

#[Route('/comment/{id}/edit', name: 'comment_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
public function editComment(
    int $id,
    Request $request,
    EntityManagerInterface $em,
    UtilisateurRepository $utilisateurRepository
): Response {
    $commentaire = $em->getRepository(Commentaire::class)->find($id);

    if (!$commentaire) {
        throw $this->createNotFoundException('Commentaire introuvable');
    }

    $currentUser = $this->getCurrentUtilisateur($utilisateurRepository);

    if ($commentaire->getUtilisateur()?->getId() !== $currentUser->getId()) {
        throw $this->createAccessDeniedException('Vous ne pouvez modifier que vos propres commentaires.');
    }

    $form = $this->createForm(CommentaireType::class, $commentaire);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        if (method_exists($commentaire, 'setDateModification')) {
            $commentaire->setDateModification(new \DateTime());
        }

        $em->flush();
        $this->addFlash('success', 'Commentaire modifié.');

        return $this->redirectToRoute('community_show', [
            'id' => $commentaire->getPost()?->getIdPost()
        ]);
    }

    return $this->render('Community/edit_comment.html.twig', [
        'form' => $form->createView(),
        'commentaire' => $commentaire,
        'currentUser' => $currentUser,
    ]);
}

#[Route('/comment/{id}/delete', name: 'comment_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
public function deleteComment(
    int $id,
    Request $request,
    EntityManagerInterface $em,
    UtilisateurRepository $utilisateurRepository
): RedirectResponse {
    $commentaire = $em->getRepository(Commentaire::class)->find($id);

    if (!$commentaire) {
        throw $this->createNotFoundException('Commentaire introuvable');
    }

    $currentUser = $this->getCurrentUtilisateur($utilisateurRepository);

    if ($commentaire->getUtilisateur()?->getId() !== $currentUser->getId()) {
        throw $this->createAccessDeniedException('Vous ne pouvez supprimer que vos propres commentaires.');
    }

    if (!$this->isCsrfTokenValid('delete_comment_' . $commentaire->getIdCommentaire(), (string) $request->request->get('_token'))) {
        throw $this->createAccessDeniedException('Token CSRF invalide.');
    }

    $post = $commentaire->getPost();

    if ($post && method_exists($post, 'setNombreCommentaires')) {
        $post->setNombreCommentaires(max(0, ($post->getNombreCommentaires() ?? 0) - 1));
    }

    $em->remove($commentaire);
    $em->flush();

    $this->addFlash('success', 'Commentaire supprimé.');

    return $this->redirectToRoute('community_show', [
        'id' => $post?->getIdPost()
    ]);
}
}