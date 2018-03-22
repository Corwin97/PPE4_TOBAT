<?php

namespace TOBAT\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TOBAT\Bundle\Entity\Admin;
use TOBAT\Bundle\Form\AdminType;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$connexion = new Admin();

    	$form = $this-> get ('form.factory')-> create(AdminType::class, $connexion);
    	
        return $this->render('TOBATBundle:Default:index.html.twig', array('form' => $form->createView(),));
    }

	public function connexionAction($login, $password)
    {
        $connexion = new Admin();

    	$form = $this-> get ('form.factory')-> create(AdminType::class, $connexion);
    	$managerAdmin = $this->getDoctrine()
        	                     ->getManager();

      	$admins = $managerAdmin->getRepository('SIOBlogBundle:Admin')->findAll();

      	
      		if($login == $admin["login"] && $password == $admin["password"])
      		{
				return $this->redirectToRoute('TOBATBundle:Default:voir.html.twig');
      		}
      	


        return $this->render('TOBATBundle:Default:index.html.twig',  array('form' =>$form->createView(), ));
    }
    public function ajouterAction()
    {
        return $this->render('TOBATBundle:Default:ajout.html.twig');
    }

}
