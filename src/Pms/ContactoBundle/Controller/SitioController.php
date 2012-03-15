<?php
namespace Pms\ContactoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pms\ContactoBundle\Entity\Compania;
use Symfony\Component\HttpFoundation\Request;

class SitioController extends Controller
{
  public function indiceAction($pagina)
  {
    return $this->render('ContactoBundle:Contacto:'.$pagina.'.html.twig');
  }
}
