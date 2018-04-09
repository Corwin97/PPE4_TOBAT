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
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

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
      $managerBateau = $this->getDoctrine()->getManager();

      $LesBateaux = $managerBateau->getRepository('TOBATBundle:Bateau')->findAll();
        
      return $this->render('TOBATBundle:Default:voir.html.twig', array('LesBateaux' =>   $LesBateaux ));
    }

    public function jsonAction()
    {
      $encoders = array(new XmlEncoder(), new JsonEncoder());
      $normalizers = array(new GetSetMethodNormalizer());
      $serializer = new Serializer($normalizers, $encoders);
      $manager = $this->getDoctrine()->getManager();

      $LesBateaux = $manager->getRepository('TOBATBundle:Bateau')->findAll();
      return new Response($serializer->serialize($LesBateaux, 'json'));
    }
}
