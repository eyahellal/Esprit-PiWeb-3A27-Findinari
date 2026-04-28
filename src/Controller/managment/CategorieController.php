<?php

namespace App\Controller\managment;

use App\Entity\management\Categorie;
use App\form\CategorieType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/categorie')]
class CategorieController extends AbstractController
{
<<<<<<< HEAD
    #[Route('/', name: 'app_categorie_index', methods: ['GET'])]
=======
#[Route('/', name: 'app_categorie_index', methods: ['GET'])]
>>>>>>> 6ee8063c53bb7a428576b4b6405d1e3ad0dd8911
public function index(CategorieRepository $categorieRepository, Request $request): Response
{
    $search = $request->query->get('search', '');
    $statut = $request->query->get('statut', '');
<<<<<<< HEAD

    $categories = $categorieRepository->findByFilters($search, $statut);
=======
    $page = $request->query->getInt('page', 1);
    $limit = 6;

    $qb = $categorieRepository->createQueryBuilder('c');

    if ($search) {
        $qb->andWhere('c.nom LIKE :search')
           ->setParameter('search', '%' . $search . '%');
    }

    if ($statut) {
        $qb->andWhere('c.statut = :statut')
           ->setParameter('statut', $statut);
    }

    // Count total
    $total = (clone $qb)->select('COUNT(c.id)')->getQuery()->getSingleScalarResult();
    $totalPages = max(1, ceil($total / $limit));

    if ($page < 1) $page = 1;
    if ($page > $totalPages) $page = $totalPages;

    // Get paginated results
    $categories = $qb->setFirstResult(($page - 1) * $limit)
                     ->setMaxResults($limit)
                     ->getQuery()
                     ->getResult();
>>>>>>> 6ee8063c53bb7a428576b4b6405d1e3ad0dd8911

    return $this->render('management/categorie/index.html.twig', [
        'categories' => $categories,
        'search' => $search,
        'statut' => $statut,
<<<<<<< HEAD
=======
        'currentPage' => $page,
        'totalPages' => $totalPages,
        'total' => $total,
>>>>>>> 6ee8063c53bb7a428576b4b6405d1e3ad0dd8911
    ]);
}

    #[Route('/new', name: 'app_categorie_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categorie = new Categorie();
        $categorie->setStatut('Active');

        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($categorie);
            $entityManager->flush();
            $this->addFlash('success', 'Category created successfully!');
            return $this->redirectToRoute('app_categorie_index');
        }

        return $this->render('management/categorie/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

   #[Route('/{id}/edit', name: 'app_categorie_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(CategorieType::class, $categorie);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();
        $this->addFlash('success', 'Category updated successfully!');
        return $this->redirectToRoute('app_categorie_index');
    }

    return $this->render('management/categorie/edit.html.twig', [
        'categorie' => $categorie,
        'form' => $form->createView(),
    ]);
}

    #[Route('/{id}/delete', name: 'app_categorie_delete', methods: ['POST'])]
    public function delete(Request $request, Categorie $categorie, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorie->getId(), $request->request->get('_token'))) {
            $entityManager->remove($categorie);
            $entityManager->flush();
            $this->addFlash('success', 'Category deleted!');
        }
        return $this->redirectToRoute('app_categorie_index');
    }
}