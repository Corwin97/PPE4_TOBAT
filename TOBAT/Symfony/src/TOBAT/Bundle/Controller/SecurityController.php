<?php

namespace TOBAT\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
	{
		$authenticationUtils = $this->get('security.authentication_utils');
		
	    // get the login error if there is one
	    $error = $authenticationUtils->getLastAuthenticationError();

	    // last username entered by the user
	    $lastUsername = $authenticationUtils->getLastUsername();

	    return $this->render('TOBATBundle:Default:login.html.twig', array(
	        'last_username' => $lastUsername,
	        'error'         => $error,
	    ));
	}
}
