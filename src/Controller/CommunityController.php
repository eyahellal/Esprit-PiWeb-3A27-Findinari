<?php

namespace App\Controller;

use App\Entity\community\Post;
use App\Entity\community\Commentaire;
use App\Entity\community\Like;
use App\Entity\user\Utilisateur;
use App\Form\PostType;
use App\Form\CommentaireType;
use App\Repository\PostRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\LikeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/community')]
class CommunityController extends AbstractController
{
    private function getCurrentUtilisateur(UtilisateurRepository $repo): Utilisateur
    {
        $user = $this->getUser();

        if ($user instanceof Utilisateur) {
            return $user;
        }

        throw $this->createAccessDeniedException();
    }

    private function checkToxicity(?string $text): bool
    {
        $badWords = ['fuck', 'shit', 'bitch', 'merde', 'pute'];

        foreach ($badWords as $word) {
            if (str_contains(strtolower((string)$text), $word)) {
                return true;
            }
        }

        return false;
    }

    #[Route('/', name: 'community_index')]
    public function index(PostRepository $repo): Response
    {
        return $this->render('community/index.html.twig', [
            'posts' => $repo->findAll()
        ]);
    }

    #[Route('/create', name: 'community_create')]
    public function create(Request $request, EntityManagerInterface $em, UtilisateurRepository $repo): Response
    {
        $user = $this->getCurrentUtilisateur($repo);

        $post = new Post();
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            if ($this->checkToxicity($post->getContenu())) {
                $form->get('contenu')->addError(new FormError('Contenu toxique'));
            }

            if ($form->isValid()) {
                $post->setUtilisateur($user);
                $post->setDateCreation(new \DateTime());

                $em->persist($post);
                $em->flush();

                return $this->redirectToRoute('community_index');
            }
        }

        return $this->render('community/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/post/{id}', name: 'community_show')]
    public function show(Post $post): Response
    {
        return $this->render('community/show.html.twig', [
            'post' => $post
        ]);
    }

    #[Route('/post/{id}/comment', name: 'community_comment')]
    public function comment(
        Post $post,
        Request $request,
        EntityManagerInterface $em,
        UtilisateurRepository $repo
    ): RedirectResponse {
        $user = $this->getCurrentUtilisateur($repo);

        $comment = new Commentaire();
        $comment->setPost($post);
        $comment->setUtilisateur($user);
        $comment->setContenu($request->request->get('contenu'));
        $comment->setDateCreation(new \DateTime());

        $em->persist($comment);
        $em->flush();

        return $this->redirectToRoute('community_show', ['id' => $post->getIdPost()]);
    }

    #[Route('/post/{id}/like', name: 'community_like')]
    public function like(
        Post $post,
        EntityManagerInterface $em,
        UtilisateurRepository $repo,
        LikeRepository $likeRepo
    ): RedirectResponse {
        $user = $this->getCurrentUtilisateur($repo);

        $existing = $likeRepo->findOneBy([
            'post' => $post,
            'utilisateur' => $user
        ]);

        if ($existing) {
            $em->remove($existing);
        } else {
            $like = new Like();
            $like->setPost($post);
            $like->setUtilisateur($user);
            $like->setDateLike(new \DateTime());

            $em->persist($like);
        }

        $em->flush();

        return $this->redirectToRoute('community_show', ['id' => $post->getIdPost()]);
    }
}