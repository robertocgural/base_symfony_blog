<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;

class BlogController extends AbstractController
{
    #[Route('/', name: 'get_posts')]
    public function index(PostRepository $postRepository): JsonResponse
    {
        return $this->render('blog/index.html.twig', [
            'posts' => $postRepository->findAll()
        ]);
    }
}
