<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;
use AppBundle\Entity\User as User;

/**
 * @Route ("/user")
 */
class UserController extends Controller
{

    /**
     * @Route("/index", name="user_index")
     */
    public function indexAction()
    {

        return $this->render('User/index.html.twig');
    }

}
