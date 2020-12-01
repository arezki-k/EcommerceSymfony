<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('shop/home.html.twig');
    }
     /**
     * @Route("/categories", name="categories")
     */
    public function categories(): Response
    {
        return $this->render('shop/categories.html.twig');
    }
     /**
     * @Route("/produits", name="produits")
     */
    public function produits(): Response
    {
        return $this->render('shop/produits.html.twig');
    }
       /**
     * @Route("/produit", name="produit")
     */
    public function produit(): Response
    {
        return $this->render('shop/produit.html.twig');
    }





}
