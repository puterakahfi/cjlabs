<?php

namespace Cms\ContentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('CmsContentBundle:Dashboard:index.html.twig', array('name' => 'codejunior'));
    }
}
