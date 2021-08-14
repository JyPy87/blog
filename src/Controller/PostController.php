<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="post_")
 */
class PostController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(PostRepository $postRepository): Response
    {
        $posts = $postRepository->findByCategory('culpa');
        dd($posts);
        return $this->render('post/index.html.twig', [
            'posts'=>$posts,
        ]);
    }
}
