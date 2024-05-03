<?php

use App\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    public function register()
    {
        //echo 'Register';
        //return new Response('Register user');
        return $this->render('user/register.html.twig');

    }

    public function login()
    {
        //echo 'Login';
        //return new Response('Login user');
        return $this->render('user/login.html.twig');

    }

    public function logout()
    {
        //echo 'Logout';
        //return new Response('Logout user');
        return $this->render('user/logout.html.twig');


    }
}