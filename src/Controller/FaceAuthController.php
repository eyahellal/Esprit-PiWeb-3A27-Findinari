<?php

namespace App\Controller;

use App\Service\FacePlusPlusService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FaceAuthController extends AbstractController
{
    #[Route('/face/test', name: 'app_face_test', methods: ['GET', 'POST'])]
    public function test(
        Request $request,
        FacePlusPlusService $faceService,
        EntityManagerInterface $entityManager
    ): Response {
        if ($request->isMethod('POST')) {
            $file1 = $request->files->get('image1');
            $file2 = $request->files->get('image2');

            if (!$file1 || !$file2) {
                $this->addFlash('danger', 'Please upload both images.');
                return $this->redirectToRoute('app_face_test');
            }

            $uploadDir = $this->getParameter('kernel.project_dir') . '/var/uploads/faces';

            if (!is_dir($uploadDir) && !mkdir($uploadDir, 0777, true) && !is_dir($uploadDir)) {
                throw new \RuntimeException('Unable to create upload directory.');
            }

            $path1 = $uploadDir . '/' . uniqid('face1_', true) . '.' . $file1->guessExtension();
            $path2 = $uploadDir . '/' . uniqid('face2_', true) . '.' . $file2->guessExtension();

            try {
                $file1->move(dirname($path1), basename($path1));
                $file2->move(dirname($path2), basename($path2));

                $token1 = $faceService->detectFaceToken($path1);
                $token2 = $faceService->detectFaceToken($path2);

                if (!$token1 || !$token2) {
                    $this->addFlash('danger', 'No face detected in one of the images.');
                    return $this->redirectToRoute('app_face_test');
                }

                $confidence = $faceService->compare($token1, $token2);

                $this->addFlash('success', 'Comparison confidence: ' . $confidence);
                return $this->redirectToRoute('app_face_test');
            } catch (FileException|\RuntimeException $e) {
                $this->addFlash('danger', $e->getMessage());
                return $this->redirectToRoute('app_face_test');
            }
        }

        return $this->render('face/test.html.twig');
    }
}