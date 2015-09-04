<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * class for role
 * @Route ("/role")
 */
class RoleController extends Controller
{
    /**
     * @Route("/index", name="role_index")
     */
    function indexAction()
    {
        return $this->render('Role/index.html.twig');
    }

}
