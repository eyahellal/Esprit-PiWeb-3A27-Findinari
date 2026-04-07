<?php

namespace App\Controller;

use App\Entity\community\Commentaire;
use App\Entity\community\Post;
use App\form\CommentaireType;
use App\form\PostType;
use App\Repository\PostRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    private function getCurrentUtilisateur(UtilisateurRepository $utilisateurRepository, EntityManagerInterface $em)
    {
        $user = $utilisateurRepository->find(1);

        if (!$user) {
            $user = new \App\Entity\user\Utilisateur();
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

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig');
    }

    #[Route('/how-it-works', name: 'app_how_it_works')]
    public function howItWorks(): Response
    {
        return $this->render('home/how-it-works.html.twig');
    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        return $this->render('home/services.html.twig');
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig');
    }

    #[Route('/support', name: 'support_center')]
    public function support(): Response
    {
        return $this->render('reclamation/support_center.html.twig');
    }

    #[Route('/service/{id}', name: 'app_service_details')]
    public function serviceDetails(int $id = 1, Request $request, PostRepository $postRepository, UtilisateurRepository $utilisateurRepository, EntityManagerInterface $em): Response
    {
        $services = [
            1 => ['name' => 'Budget Management', 'description' => 'Track your income and expenses with AI-powered categorization'],
            2 => ['name' => 'Loan Investment', 'description' => 'Lend money, get receipts, earn returns after fixed period'],
            3 => ['name' => 'Objective Management', 'description' => 'Set financial goals and track progress with AI insights'],
            4 => ['name' => 'Community', 'description' => 'Connect with investors and learn from other users'],
        ];

        if (!isset($services[$id])) {
            $id = 1;
        }

        $data = [
            'id' => $id,
            'service' => $services[$id],
        ];

        if ($id === 4) {
            $currentUser = $this->getCurrentUtilisateur($utilisateurRepository, $em);
            $query = trim((string) $request->query->get('q', ''));
            $posts = $postRepository->searchCommunityFeed($query);
            $postForm = $this->createForm(PostType::class, new Post(), [
                'action' => $this->generateUrl('community_post_create'),
                'method' => 'POST',
            ]);

            $commentForms = [];
            foreach ($posts as $post) {
                $commentForms[$post->getIdPost()] = $this->createForm(CommentaireType::class, new Commentaire(), [
                    'action' => $this->generateUrl('community_comment_create', ['id' => $post->getIdPost()]),
                    'method' => 'POST',
                ])->createView();
            }

            $data = array_merge($data, [
                'posts' => $posts,
                'communityQuery' => $query,
                'postForm' => $postForm->createView(),
                'commentForms' => $commentForms,
                'currentUser' => $currentUser,
            ]);
        }

        return $this->render('home/service-details.html.twig', $data);
    }

    #[Route('/privacy', name: 'app_privacy')]
    public function privacy(): Response
    {
        return $this->render('home/privacy-policy.html.twig');
    }
}
