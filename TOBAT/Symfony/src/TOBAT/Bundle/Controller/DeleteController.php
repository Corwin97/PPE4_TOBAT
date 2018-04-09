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

class DeleteController extends Controller
{
  public function supprimerAction($id)
  {
    $managerBateau = $this->getDoctrine()
                           ->getManager();

    $bateau = $managerBateau->getRepository('TOBATBundle:Bateau')->find($id);
    $managerBateau->remove($bateau);
    $managerBateau->flush();
    return $this->redirectToRoute('tobat_accueil');
  }
}
