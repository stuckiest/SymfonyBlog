<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
    *@Route("/blogIndex")
    *
    */
    public function blogIndexAction()
    {
        return $this->render('default/blogIndex.html.twig');
    }

    /**
    *@Route("/blogShow")
    *
    */
    public function blogShowAction()
    {
        return $this->render('default/blogShow.html.twig');
    }
}
