<?php

namespace AppBundle\Controller\Content;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DashboardController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction($name="")
    {
        return array('name' => $name);
    }
}
