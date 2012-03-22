<?php
namespace Pms\ContactoBundle\DataFixtures\ORM;

//use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Pms\ContactoBundle\Entity\Provincia;
use Pms\ContactoBundle\Entity\Departamento;
use Doctrine\Common\Persistence\ObjectManager;

//class CargaProvincias implements FixtureInterface
class CargaProvincias extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $prov1 = new Provincia();
        $prov1->setDescripcion('Chachapoyas');
        $prov1->setDepartamento($em->merge($this->getReference('AM')));
        $em->persist($prov1);
        
        $prov2 = new Provincia();
        $prov2->setDescripcion('Bagua');
        $prov2->setDepartamento($em->merge($this->getReference('AM')));
        $em->persist($prov2);
        
        $prov3 = new Provincia();
        $prov3->setDescripcion('Bongará');
        $prov3->setDepartamento($em->merge($this->getReference('AM')));
        $em->persist($prov3);
        
        $prov4 = new Provincia();
        $prov4->setDescripcion('Condorcanqui');
        $prov4->setDepartamento($em->merge($this->getReference('AM')));
        $em->persist($prov4);
        
        $prov5 = new Provincia();
        $prov5->setDescripcion('Luya');
        $prov5->setDepartamento($em->merge($this->getReference('AM')));
        $em->persist($prov5);

        $em->flush();
    }

    public function getOrder() {
        return 2;
    }
}
?>
