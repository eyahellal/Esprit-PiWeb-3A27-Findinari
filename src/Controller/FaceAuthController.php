<?php

namespace App\Controller;

use App\Service\FacePlusPlusService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FaceAuthController extends AbstractController
{
    #[Route('/face/test', name: 'app_face_test', methods: ['GET', 'POST'])]
    public function test(
        Request $request,
        FacePlusPlusService $faceService
    ): Response {
        if ($request->isMethod('POST')) {
            $file1 = $request->files->get('image1');
            $file2 = $request->files->get('image2');

            if (!$file1 instanceof UploadedFile || !$file2 instanceof UploadedFile) {
                $this->addFlash('danger', 'Please upload both images.');
                return $this->redirectToRoute('app_face_test');
            }

            $projectDir = $this->getParameter('kernel.project_dir');

            if (!is_string($projectDir)) {
                throw new \RuntimeException('Invalid project directory.');
            }

            $uploadDir = $projectDir . '/var/uploads/faces';

            if (!is_dir($uploadDir) && !mkdir($uploadDir, 0777, true) && !is_dir($uploadDir)) {
                throw new \RuntimeException('Unable to create upload directory.');
            }

            $extension1 = $file1->guessExtension() ?? 'jpg';
            $extension2 = $file2->guessExtension() ?? 'jpg';

            $path1 = $uploadDir . '/' . uniqid('face1_', true) . '.' . $extension1;
            $path2 = $uploadDir . '/' . uniqid('face2_', true) . '.' . $extension2;

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
            } finally {
                if (is_file($path1)) {
                    @unlink($path1);
                }

                if (is_file($path2)) {
                    @unlink($path2);
                }
            }
        }

        return $this->render('face/test.html.twig');
    }
}