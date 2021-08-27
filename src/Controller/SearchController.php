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
     * @Route("search", name="search_post")
     */
    public function searchBar()
    {
       $form = $this->createFormBuilder()
       ->setAction($this->generateUrl('handleSearch'))
       ->add('query', TextType::class, [
        'label' => false,
        'attr' => [
            'class' => 'form-control',
            'placeholder' => 'Entrez un mot-clé'
        ]
    ])
    ->add('recherche', SubmitType::class, [
        'attr' => [
            'class' => 'btn btn-primary'
        ]
    ])
    ->getForm();
return $this->render('search/searchBar.html.twig', [
    'form' => $form->createView()
]);
  
       
    }
}
