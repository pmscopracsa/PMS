<?php

namespace Pms\ContactoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Pms\ContactoBundle\Entity\EspecialidadCompania;
use Doctrine\Common\Persistence\ObjectManager;

class CargaEspecialidadesCompania implements FixtureInterface
{
  public function load(ObjectManager $em)
  {
    $especialidades = array(
      'Abastecimiento de Combustible',
      'Abogados',
      'Acabados en General',
      'Accesorios para puertas',
      'Acero Dimensionado',
      'Acodicionamiento de Oficinas',
      'Acrilicos',
      'Adhesivos',
      'Aditivos',
      'Administracion de Obra',
      'Administracion Publica',
      'Aeropuerto',
      'Agencia de Viaje',
      'Agente de Aduanas',
      'Agua contra incendio',
      'Aire Acondicionado',
      'Aire Acondicionado Auto',
      'Aislantes Termicos',
      'Alfombras',
      'Alquiler de Contenedores',
      'Alquiler de Maquinaria y Equipo de Construccion',
      'Alquiler radio motorola',
      'Amigos de ERB',
      'Andamiaje',
      'Anti hurto',
      'Arcos de Futbol',
      'Arquitecto',
      'Artefactos de Iluminacion-Lamparas',
      'Paneles Eletronicos Publicitarios'
      );

    foreach($especialidades as $especialidad)
    {
      $entidad = new EspecialidadCompania();
      $entidad->setDescripcion($especialidad);

      $em->persist($entidad);
    }
    $em->flush();
  }
}

