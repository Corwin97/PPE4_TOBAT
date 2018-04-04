<?php

namespace TOBAT\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TOBAT\Bundle\Entity\Admin;
use TOBAT\Bundle\Form\AdminType;
use TOBAT\Bundle\Entity\Bateau;
use TOBAT\Bundle\Form\BateauType;
use TOBAT\Bundle\Form\BateauEditType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$connexion = new Admin();

    	$form = $this-> get ('form.factory')-> create(AdminType::class, $connexion);
    	
        return $this->render('TOBATBundle:Default:index.html.twig', array('form' => $form->createView(),));
    }

    public function voirAction()
    {
      $managerBateau = $this->getDoctrine()
                               ->getManager();

        $LesBateaux = $managerBateau->getRepository('TOBATBundle:Bateau')->findAll();
        
      return $this->render('TOBATBundle:Default:voir.html.twig', array('LesBateaux' =>   $LesBateaux ));
    }

	public function connexionAction($login, $password)
    {
        $connexion = new Admin();

    	$form = $this-> get ('form.factory')-> create(AdminType::class, $connexion);
    	$managerAdmin = $this->getDoctrine()
        	                     ->getManager();

      	$admins = $managerAdmin->getRepository('TOBATBundle:Admin')->findAll();

      	
      		if($login == $admin["login"] && $password == $admin["password"])
      		{
				return $this->redirectToRoute('TOBATBundle:Default:voir.html.twig');
      		}
      	


        return $this->render('TOBATBundle:Default:index.html.twig',  array('form' =>$form->createView(), ));
    }

    public function ajouterAction(request $request)
    {
        $bateau = new Bateau();

    	$form = $this-> get ('form.factory')-> create(BateauType::class, $bateau);

       if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
      {
        $em = $this->getDoctrine()->getManager();
        $em->persist($bateau);
        $em->flush();
        
        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
         $managerBateau = $this->getDoctrine()
                               ->getManager();
        $LesBateaux = $managerBateau->getRepository('TOBATBundle:Bateau')->findAll();
       return $this->render('TOBATBundle:Default:voir.html.twig', array('LesBateaux' =>   $LesBateaux ));
      }
    	
        return $this->render('TOBATBundle:Default:ajout.html.twig', array('form' => $form->createView(),));
    }

    public function modifierAction($id, request $request)
    {
      
      $managerBateau = $this->getDoctrine()
                             ->getManager();

      $bateau = $managerBateau->getRepository('TOBATBundle:Bateau')->find($id);
      
      $form = $this->get('form.factory')->create(BateauEditType::class, $bateau);

      //Deuxième passage : on enregistre l'objet $bateau dans la base de données.
      if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
      {
        $em = $this->getDoctrine()->getManager();
        $em->persist($bateau);
        $em->flush();
        
        $request->getSession()->getFlashBag()->add('notice', 'Bateau bien modifié.');
         return $this->redirectToRoute('tobat_connexion');
        
      }
      return $this->render('TOBATBundle:Default:modification.html.twig', array('form' => $form->createView(),));
    }

    public function supprimerAction($id)
    {
      $managerBateau = $this->getDoctrine()
                             ->getManager();

      $bateau = $managerBateau->getRepository('TOBATBundle:Bateau')->find($id);
      $managerBateau->remove($bateau);
      $managerBateau->flush();
      return $this->redirectToRoute('tobat_connexion');
    }
}
