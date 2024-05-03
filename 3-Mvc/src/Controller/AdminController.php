<?php

use App\Repository\UserRepository;
use App\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends AbstractController
{
    public function dashboard()
    {
        //echo 'Dashboard';
        return new Response('Dashboard admin');

    }

    public function user()
    {
        //echo 'Gestion user';
        //return new Response('User admin');
        $userRepository = new UserRepository();
        $users = $userRepository->findAll();
        //var_dump($users);
        return $this->render('admin/user.html.twig', [
            'users' => $users,
            'autre' => 'Autre valeur'
        ]);
    }
}