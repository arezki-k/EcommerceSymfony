<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Category;
use App\Repository\ProduitRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
    public function categories(CategoryRepository $repo): Response
    {
        $categories = $repo->findAll();
        return $this->render('shop/categories.html.twig',[
            'categories'=>$categories
        ]);
    }

         /**
     * @Route("/produitParCategorie/{id}", name="produitParCategorie")
     */
    public function produitParCategorie(CategoryRepository $repo, int $id): Response
    {
        $category = $repo->find($id);
        $All = $category->getProduits();

        return $this->render('shop/produits.html.twig',[

            'All'=>$All
        ]);
    }
     /**
     * @Route("/produits", name="produits")
     */
    public function produits(ProduitRepository $repo): Response
    {
        $All=$repo->findAll();
        
        return $this->render('shop/produits.html.twig',[

            'All'=>$All
        ]);
    }

       /**
     * @Route("/produit/{id}", name="produit")
     */
    public function produit(Produit $produit): Response
    {
        return $this->render('shop/produit.html.twig',[
            'produit'=>$produit
        ]);
    }





}
