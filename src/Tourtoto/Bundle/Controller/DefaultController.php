<?php

namespace Tourtoto\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TourtotoBundle:Default:index.html.twig', array('name' => $name));
    }
}
