<?php
namespace Pms\ContactoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Pms\ContactoBundle\Entity\Provincia;
use Doctrin\Commo\Persistenc\ObjectManager;

class CargaProvincias implements FixtureInterface
{
    public function load(ObjectManager $em)
    {
        $provincias = array( //195
          array('descripcion'=>'Chachapoyas','departamento'=>''),  
          array('descripcion'=>'Bagua','departamento'=>''),  
          array('descripcion'=>'Bongará','departamento'=>''),  
          array('descripcion'=>'Condorcanqui','departamento'=>''),  
          array('descripcion'=>'Luya','departamento'=>'')
        );
    }
}

?>
