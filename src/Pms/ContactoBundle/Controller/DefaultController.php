<?php

namespace Pms\ContactoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Pms\ContactoBundle\Entity\Compania;
use Pms\ContactoBundle\Entity\TipoCompania;
use Pms\ContactoBundle\Entity\ViaEnvio;
use Pms\ContactoBundle\Entity\Departamento;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    public function compania_nuevoAction()
    {
      $em = $this->getDoctrine()->getEntityManager();
      
      /** obtener tipo de companias */
      $tipocompanias = $em->getRepository('ContactoBundle:TipoCompania')->findAll();
      
      /** obtener tipo de envios */
      $tipoenvios = $em->getRepository('ContactoBundle:ViaEnvio')->findAll();
      
      /** obtener tipo de direccion */
      $tipodirecciones = $em->getRepository('ContactoBundle:TipoDireccion')->findAll();
      
      /** obtener lista de departamentos */
      $departamentos = $em->getRepository('ContactoBundle:Departamento')->findAll();
      
      return $this->render(
              'ContactoBundle:Contacto:regcompania.html.twig',
              array(
                  'tipocompanias'=>$tipocompanias,
                  'tipoenvios'=>$tipoenvios,
                  'tipodirecciones'=>$tipodirecciones,
                  'departamentos'=>$departamentos
              )
      );
    }
    
    public function persona_nuevoAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        /** obtener companias */
        $companias = $em->getRepository('ContactoBundle:Compania')->findAll();
        
        /** obtener especialidades de companias */
        $especialidadescompanias = $em->getRepository('ContactoBundle:EspecialidadCompania')->findAll();
        
        /** obtener via de envios */
        $tipoenvios = $em->getRepository('ContactoBundle:ViaEnvio')->findAll();
        
        return $this->render(
                'ContactoBundle:Contacto:regpersona.html.twig',
                array(
                    'companias'=>$companias,
                    'especialidadescompanias'=>$especialidadescompanias,
                    'tipoenvios'=>$tipoenvios
                )
        );
        
    }
    
    public function lista_distribucionAction()
    {
        
    }
}
