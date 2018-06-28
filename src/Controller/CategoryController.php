<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class CategoryController extends Controller
{
    /**
     * @Route("/categories", name="categories")
     */
    public function categories(CategoryRepository $categoryRepository)
    {
        $categories = $categoryRepository->findBy(['parent' => null]);
        return $this->render('categories/categories.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/category/{categorySlug}", name="category")
     * @ParamConverter("category", options={"mapping":{"categorySlug":"slug"}})
     */
    public function category(Category $category)
    {
        return $this->render('main/index.html.twig', [
            'category' => $category,
        ]);
    }
}
