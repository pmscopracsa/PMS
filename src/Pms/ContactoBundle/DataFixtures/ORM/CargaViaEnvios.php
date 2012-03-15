<?php

namespace Pms\ContactoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Pms\ContactoBundle\Entity\ViaEnvio;
use Doctrine\Common\Persistence\ObjectManager;

class CargaViaEnvios implements FixtureInterface
{
  public function load(ObjectManager $em)
  {
    $viaenvios = array(
      'Impreso','Email'
      );

    foreach($viaenvios as $viaenvio) {
      $entidad = new ViaEnvio();
      $entidad->setNombre($viaenvio);

      $em->persist($entidad);
    }
    $em->flush();
  }
}
