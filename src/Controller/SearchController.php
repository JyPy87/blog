<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\SearchType;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("/post/search", name="search_post")
     */
    public function searchPost(Request $request, PostRepository $postRepository): Response
    {
        $searchPostForm = $this->createForm(SearchType::class);
     
        if($searchPostForm->handleRequest($request)->isSubmitted() && $searchPostForm->isValid()){
            dump($request);
            $criteria = $searchPostForm->getData();
            $posts = $postRepository->searchPost($criteria);
        }
        return $this->render('search/post.html.twig', [
            'form' => $searchPostForm->createView(),
        ]);
    }
}
