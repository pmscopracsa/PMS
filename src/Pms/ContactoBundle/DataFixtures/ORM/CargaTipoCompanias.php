<?php
namespace Pms\ContactoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Pms\ContactoBundle\Entity\TipoCompania;
use Doctrine\Common\Persistence\ObjectManager;

class CargaTipoCompanias implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $tipocompanias = array(
      array('nombre'=>'Juridica','nombrecorto'=>'J'),
      array('nombre'=>'Natural','nombrecorto'=>'N'),
      );

    foreach($tipocompanias as $tipocompania){
      $entidad = new TipoCompania();
      $entidad->setNombre($tipocompania['nombre']);
      $entidad->setNombrecorto($tipocompania['nombrecorto']);

      $manager->persist($entidad);
    }
    $manager->flush();
  }
}
