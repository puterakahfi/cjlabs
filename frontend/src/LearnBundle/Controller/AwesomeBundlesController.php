<?php

namespace LearnBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AwesomeBundlesController extends Controller
{

    /**
     * @Route("/bundle/dashboard",name="learn_bundle_dashboard")
     * @Template()
     */
    public function dashboardAction()
    {
        $map = $this->get('ivory_google_map.map');
     
        
        return $this->render('LearnBundle:AwesomeBundles:dashboard.html.twig', array('map'=>$map));
    }

}
