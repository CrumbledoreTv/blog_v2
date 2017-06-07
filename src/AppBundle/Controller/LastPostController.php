<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Post controller.
 *
 * @Route("home")
 */
class LastPostController extends Controller
{
    /**
     * Order all post entities.
     *
     * @Route("/", name="home_index")
     * @Method("GET")
     */
    public function indexOrderAction()
    {
        $em = $this->getDoctrine()->getManager();

        $orderPosts = $em->getRepository('AppBundle:Post')->findBy(array(), array('id' => 'DESC'));

        return $this->render('home/index.html.twig', array(
            'orderPosts' => $orderPosts,
        ));
    }
}
