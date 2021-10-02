<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("search", name="search_")
 */
class SearchController extends AbstractController
{
    /**
     * @Route("", name="bar")
     */
    public function searchBar()
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('search_handle'))
            ->add('query', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'form-control me-sm-2',
                    'placeholder' => 'Chercher un article',
                ]
            ])
            ->add('recherche', SubmitType::class, [
                'attr' => ['class' => 'btn btn-secondary my-2 my-sm-0'],
            ])
            ->getForm();
        return $this->render('search/searchBar.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("handle", name="handle")
     */
    public function handleSearch(Request $request, PostRepository $postRepository)
    {
        $query = $request->request->get('form')['query'];
        if ($query) {
            $post = $postRepository->findPostBySearch($query);
        }
        return $this->render('search/result.html.twig', [
            'posts' => $post
        ]);
    }
}
