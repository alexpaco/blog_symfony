<?php

namespace Byme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@BymeBlog/Default/index.html.twig');
    }
}
