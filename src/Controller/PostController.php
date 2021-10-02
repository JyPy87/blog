<?php

namespace App\Controller;

use App\Entity\Post;
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
     * @Route("", name="index")
     */
    public function index(PostRepository $postRepository): Response
    {
        $posts = $postRepository->findLast();
        return $this->render('post/index.html.twig', [
            'posts' => $posts,
        ]);
    }

    /**
     * @Route("{id}", name="read", requirements={"id"="\d+"})
     */
    public function read(Post $post): Response
    {
        return $this->render('post/read.html.twig', [
            'post' => $post
        ]);
    }
    
    /**
     * @Route("{cat}", name="article")
     */
    public function article(PostRepository $postRepository, string $cat)
    {
        $posts = $postRepository->findByCategory($cat);

        return $this->render('post/index.html.twig',
       [
           'posts'=>$posts,        
        ]);
        
    }
}
