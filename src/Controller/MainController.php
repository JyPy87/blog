<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("", name="main_")
 */

class MainController extends AbstractController
{
    /**
     * @Route("/propos", name="propos")
     */
    public function propos(): Response
    {
        return $this->render('main/propos.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig');
    }
}
