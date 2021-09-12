<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("search", name="search_post")
     */
    public function searchBar()
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('handleSearch'))
            ->add('query', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control me-sm-2',
                    'placeholder' => 'Chercher un article',
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Recherche',
                'attr' => ['class' => 'btn btn-secondary my-2 my-sm-0'],
            ])
            ->getForm();
        return $this->render('search/searchBar.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route ("handleSearch", name="handleSearch")
     */
    public function handleSearch(Request $request, PostRepository $postRepository)
    {
        $query = $request->request->get('form')['query'];
        if ($query) {
            $posts = $postRepository->findPostBySearch($query);
        }
        return $this->render('search/result.html.twig', [
            'posts' => $posts
        ]);
    }
}
