<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticPages extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home.html.twig', [
            'titre' => 'Bienvenue sur ma page d\'accueil'
        ]);
    }
    #[Route('/mentions_legales', name: 'mentionlegale')]
    public function mentionlegal(): Response
    {
        return $this->render('mentionlegal.html.twig', [
        ]);
    }
    #[Route('/politique_de_confidentialite', name: 'politiquedeconfidentialite')]
    public function politiquedeconfidentialite(): Response
    {
        return $this->render('politiquedeconfidentialite.html.twig', [
        ]);
    }
    #[Route('/apropos', name: 'apropos')]
    public function apropos(): Response
    {
        return $this->render('apropos.html.twig', [
            'titre' => 'Bienvenue sur ma page a propos'
        ]);
    }
}