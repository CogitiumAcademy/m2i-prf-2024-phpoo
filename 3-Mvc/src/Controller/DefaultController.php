<?php

use App\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function home()
    {
        //echo 'Home';
        //return new Response('Home default');
        return $this->render('default/home.html.twig');
    }

    public function contact()
    {
        //echo 'Contact';
        //return new Response('Contact default');
        return $this->render('default/contact.html.twig');
    }
}