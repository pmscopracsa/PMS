<?php

namespace Pms\ContactoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Pms\ContactoBundle\Entity\TipoDireccion;
use Doctrine\Common\Persistence\ObjectManager;

class CargaTipoDireccion implements FixtureInterface
{
    public function load(ObjectManager $em)
    {
        $tipodirecciones = array(
            'Principal',
            'Sucursal',
            'Sucursal 1',
            'Sucursal 2',
            'Domicilio',
            'Almacen'
        );
        
        foreach ($tipodirecciones as $tipodireccion) {
            $entidad = new TipoDireccion();
            $entidad->setDescripcion($tipodireccion);
            
            $em->persist($entidad);
        }
        $em->flush();
    }
}