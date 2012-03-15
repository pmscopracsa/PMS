<?php

namespace Pms\ContactoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Pms\ContactoBundle\Entity\EspecialidadContacto;
use Doctrine\Common\Persistence\ObjectManager;

class CargaEspecialidadContacto implements FixtureInterface
{
  public function load(objectManager $em)
  {

    $especialidades = array(
      'Prueba1',
      'Prueba2',
      'Prueba3'
      );

    foreach($especialidades as $especialidad)
    {
      $entidad = new EspecialidadContacto();
      $entidad->setDescripcion($especialidad);

      $em->persist($entidad);
    }
    $em->flush();
  }
}

