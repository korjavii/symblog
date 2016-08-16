<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PageController extends Controller
{
    /**
     * @Route(
     *      "/",
     *      methods="GET",
     *      name="index_page"
     * )
     */
    public function indexAction()
    {
        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }
    
    /**
     * @Route(
     *      "/about",
     *      methods="GET",
     *      name="about_page"
     * )
     */
    public function aboutAction()
    {
        return $this->render('BloggerBlogBundle:Page:about.html.twig');
    }
    
    /**
     * @Route(
     *      "/contact",
     *      methods="GET",
     *      name="contact_page"
     * )
     */
    public function contactAction()
    {
        return $this->render('BloggerBlogBundle:Page:contact.html.twig');
    }
}
