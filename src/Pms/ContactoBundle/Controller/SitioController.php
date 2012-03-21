<?php
namespace Pms\ContactoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pms\ContactoBundle\Entity\Compania;
use Pms\ContactoBundle\Entity\TipoCompania;
use Symfony\Component\HttpFoundation\Request;

class SitioController extends Controller
{
  public function indiceAction($pagina)
  {
    $em = $this->getDoctrine()->getEntityManager();
    
    /** Tipo de companias */
    $tipocompanias = $em->getRepository('ContactoBundle:TipoCompania')->findAll();

    /** Tipo de Envios */
    $tipoenvios = $em->getRepository('ContactoBundle:ViaEnvio')->findAll();
    
    /** Tipo Direccion */
    $tipodirecciones = $em->getRepository('ContactoBundle:TipoDireccion')->findAll();
    
    /** Departamento */
    $departamentos = $em->getRepository('ContactoBundle:Departamento')->findAll();
    
    return $this->render(
      'ContactoBundle:Contacto:'.$pagina.'.html.twig',
      array(
          'tipocompanias'=>$tipocompanias,
          'tipoenvios'=>$tipoenvios,
          'tipodirecciones'=>$tipodirecciones,
          'departamentos' => $departamentos
          )
    );
  }
}
