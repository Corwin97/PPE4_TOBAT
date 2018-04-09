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

class AddController extends Controller
{
    public function ajouterAction(request $request)
    {
      
      $bateau = new Bateau();

    	$form = $this-> get ('form.factory')-> create(BateauType::class, $bateau);

      if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
      {
        $em = $this->getDoctrine()->getManager();
        $em->persist($bateau);
        $em->flush();
        
        $request->getSession()->getFlashBag()->add('notice', 'Bateau bien enregistrée.');
        $managerBateau = $this->getDoctrine()
                               ->getManager();

        $LesBateaux = $managerBateau->getRepository('TOBATBundle:Bateau')->findAll();
        return $this->render('TOBATBundle:Default:voir.html.twig', array('LesBateaux' =>   $LesBateaux ));
      }
    	
        return $this->render('TOBATBundle:Default:ajout.html.twig', array('form' => $form->createView(),));
    }

}
