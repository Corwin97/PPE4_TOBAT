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

class EditController extends Controller
{
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
         return $this->redirectToRoute('tobat_accueil');
        
      }
      return $this->render('TOBATBundle:Default:modification.html.twig', array('form' => $form->createView(),));
    }

}
