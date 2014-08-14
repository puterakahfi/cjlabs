<?php

namespace Cms\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthController extends Controller
{
    public function indexAction()
    {
        return $this->render('CmsAuthBundle:Auth:index.html.twig', array());
    }
}
