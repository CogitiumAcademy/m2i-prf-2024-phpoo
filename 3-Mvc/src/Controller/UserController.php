<?php

use App\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    public function register()
    {
        //echo 'Register';
        return new Response('Register user');

    }

    public function login()
    {
        //echo 'Login';
        return new Response('Login user');
    }

    public function logout()
    {
        //echo 'Logout';
        return new Response('Logout user');

    }
}