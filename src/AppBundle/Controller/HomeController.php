<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    /**
     * @Route("/hello")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return new Response("Hello World");
    }
}