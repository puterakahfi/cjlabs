<?php

namespace Cms\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Request;


class AuthController extends Controller
{
    public function loginAction(Request $request)
    {
    	
    	$session = $request->getSession();
        
        if($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)){
        	$error = $request->attributes->get(SecurityContextInterface::AUTHENTICATION_ERROR);
        }else{
            $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
        }
        return $this->render('CmsAuthBundle:Auth:login.html.twig', array('last_name'=>$session->get(SecurityContextInterface::LAST_USERNAME),'error'=>$error));
    }
}
