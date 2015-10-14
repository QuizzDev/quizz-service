<?php

namespace Quizz\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('QuizzAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
