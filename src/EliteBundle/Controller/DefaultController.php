<?php

namespace EliteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EliteBundle:Default:index.html.twig', array('name' => $name));
    }

    public function testAction()
    {
        return new Response("Hello World");
    }
}
