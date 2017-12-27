<?php

namespace FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FirstBundle:Default:index.html.twig');
    }
    
    public function testTwigExtendsAction()
    {
        return $this->render('FirstBundle:testTwigExtends:testTwigExtends.html.twig');
    }
    
    public function testTwigFilterAction()
    {
        return $this->render('FirstBundle:testTwigExtends:testTwigFilter.html.twig');
    }
}
