<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryTranslationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoriesController extends AbstractController
{
    /**
     * @Route("/categories", name="categories")
     */
    public function index(CategoryTranslationsRepository $repo)
    {
        $categories = $repo->findAll();

        return $this->render('categories/index.html.twig', [
            'categories' => $categories
        ]);
    }
}
