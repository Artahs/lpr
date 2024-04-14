<?php

namespace App\Controller;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use App\Entity\Panier;
use App\Form\PanierType;
use App\Repository\PanierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PanierController extends AbstractController
{
    #[Route('/compte', name: 'compte')]
    public function compte(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('login');
        }
        return $this->render('compte.html.twig', [
        ]);
    }

    #[Route('/supprimer-du-panier/{id}', name: 'supprimer_du_panier')]
    public function supprimerDuPanier(Produit $produit, Request $request, EntityManagerInterface $entityManager): RedirectResponse
    {

        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('login');
        }
        $panier = $user->getPanier();
        $panier->removeProduit($produit);
        $entityManager->flush();
        return $this->redirectToRoute('panier');
    }

    #[Route('/panier', name: 'panier')]
    public function showPanier(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('login');
        }
        $panier = $user->getPanier();
        $produits = $panier->getProduit();
        $total = 0;
        foreach ($produits as $produit) {
            $total += $produit->getPrix();
        }

        return $this->render('panier/show.html.twig', [
            'produits' => $produits,
            'total' => $total,
        ]);
    }

    #[Route('/ajouter-au-panier/{id}', name: 'ajouter_au_panier')]
    public function ajouterAuPanier(Produit $produit, EntityManagerInterface $entityManager, Request $request): RedirectResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('login');
        }
        $panier = $user->getPanier();
        if (!$panier) {
            $panier = new Panier();
            $panier->setUser($user);
            $entityManager->persist($panier);
            $entityManager->flush();
        }
        $panier->addProduit($produit);
        $entityManager->persist($panier);
        $entityManager->flush();
        return $this->redirectToRoute('panier');
        $total = $this->calculerTotalPanier($user);
        return $this->redirectToRoute('panier');
    }
    private function calculerTotalPanier($user)
    {
        $panier = $user->getPanier();
        $produits = $panier->getProduit();
        $total = 0;
        foreach ($produits as $produit) {
            $total += $produit->getPrix();
        }

        return $total;
    }
    #[Route('/commander-panier', name: 'commander_panier')]
    public function commanderPanier(EntityManagerInterface $entityManager): RedirectResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('login');
        }
        $panier = $user->getPanier();
        $produits = $panier->getProduit();
        foreach ($produits as $produit) {
            $produit->incrementerNombreCommandes();
            $entityManager->persist($produit);
        }
        $entityManager->flush();
        return $this->redirectToRoute('confirmation_commande');
    }
    #[Route('/confirmation', name: 'confirmation_commande')]
    public function confirmationCommande(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('login');
        }
        $panier = $user->getPanier();
        foreach ($panier->getProduit() as $produit) {
            $panier->removeProduit($produit);
        }
        $entityManager->flush();
        return $this->render('panier/confirmation.html.twig');
    }
}