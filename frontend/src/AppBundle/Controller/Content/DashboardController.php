<?php

namespace AppBundle\Controller\Content;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/")
 */
class DashboardController extends Controller
{

    /**
     * @Route("/", name="dashboard")
     * @Template()
     */
    public function indexAction($name = "")
    {
        return array('name' => $name);
    }

}
