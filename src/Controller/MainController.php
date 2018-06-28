<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class MainController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(CategoryRepository $categoryRepository)
    {
        $categories = $categoryRepository->findBy(['parent' => null]);
        return $this->render('main/index.html.twig', [
            'page_title' => 'OneTech',
        ]);
    }

    /**
     * @Route("/shop", name="shop")
     */
    public function shop()
    {
        return $this->render('shop/shop.html.twig', [
            'page_title' => 'Shop',
        ]);
    }

    /**
     * @Route("/product", name="product")
     */
    public function product()
    {
        return $this->render('product/product.html.twig', [
            'page_title' => 'Single Product',
        ]);
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blog()
    {
        return $this->render('blog/blog.html.twig', [
            'page_title' => 'Blog',
        ]);
    }

    /**
     * @Route("/blog-single", name="blog-single")
     */
    public function blogSingle()
    {
        return $this->render('blog_post/blog_single.html.twig', [
            'page_title' => 'Blog Post',
        ]);
    }

    /**
     * @Route("/regular", name="regular")
     */
    public function regularPost()
    {
        return $this->render('regular_post/regular_post.html.twig', [
            'page_title' => 'Regular Static',
        ]);
    }

    /**
     * @Route("/cart", name="cart")
     */
    public function cart()
    {
        return $this->render('cart/cart.html.twig', [
            'page_title' => 'Cart',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('contact/contact.html.twig', [
            'page_title' => 'Contact',
        ]);
    }
}
