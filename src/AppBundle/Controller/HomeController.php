<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Post controller.
 *
 * @Route("home")
 */
class HomeController extends Controller
{
    /**
     * Lists all post entities.
     *
     * @Route("/", name="home_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $posts = $em->getRepository('AppBundle:Post')->findAll();

        return $this->render('home/index.html.twig', array(
            'posts' => $posts,
        ));
    }

    /**
     * Finds and displays a post entity.
     *
     * @Route("/{id}", name="home_show")
     * @Method("GET")
     */
    public function showAction(Post $post)
    {
        return $this->render('home/show.html.twig', array(
            'post' => $post,
        ));
    }
}
