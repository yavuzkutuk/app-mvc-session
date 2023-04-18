<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {
        $message = '';
        $alert = '';
        $_SESSION['user'] = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_POST['username'] === 'yavuz' && $_POST['password'] === 'yavuz') {
                $message = 'Bravo !! tu es connecté !';
                $alert = 'success';
                $_SESSION['user'] = 'yavuz';
            } else {
                $message = 'Erreur !! Veuillez resaisir vos infos !';
                $alert = 'danger';
            }
        }

        return $this->twig->render('Home/index.html.twig', ['message' => $message, 'alert' => $alert]);
    }
}
