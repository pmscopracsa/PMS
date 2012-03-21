<?php
namespace Pms\ContactoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Pms\ContactoBundle\Entity\Departamento;
use Doctrine\Common\Persistence\ObjectManager;


class CargaDepartamentos implements FixtureInterface
{
    public function load(objectManager $em)
    {
        $departamentos = array(
            'Amazonas',
            'Ancash',
            'Apurimac',
            'Arequipa',
            'Ayacucho',
            'Cajamarca',
            'Callao',
            'Cuzco',
            'Huancavelica',
            'Huanuco',
            'Ica',
            'Junin',
            'La Libertad',
            'Lambayeque',
            'Lima',
            'Loreto',
            'Madre de Dios',
            'Moquegua',
            'Pasco',
            'Piura',
            'Puno',
            'San Martin',
            'Tacna',
            'Tumbes',
            'Ucayali'
        );
        foreach($departamentos as $departamento) {
            $entidad = new Departamento();
            $entidad->setDescripcion($departamento);
            
            $em->persist($entidad);
        }
        $em->flush();
    }
}

?>
