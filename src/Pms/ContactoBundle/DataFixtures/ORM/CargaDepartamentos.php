<?php
namespace Pms\ContactoBundle\DataFixtures\ORM;

//use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Pms\ContactoBundle\Entity\Departamento;
use Doctrine\Common\Persistence\ObjectManager;


//class CargaDepartamentos implements FixtureInterface 
class CargaDepartamentos extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(objectManager $em)
    {
//        $departamentos = array(
//            'Amazonas',
//            'Ancash',
//            'Apurimac',
//            'Arequipa',
//            'Ayacucho',
//            'Cajamarca',
//            'Callao',
//            'Cuzco',
//            'Huancavelica',
//            'Huanuco',
//            'Ica',
//            'Junin',
//            'La Libertad',
//            'Lambayeque',
//            'Lima',
//            'Loreto',
//            'Madre de Dios',
//            'Moquegua',
//            'Pasco',
//            'Piura',
//            'Puno',
//            'San Martin',
//            'Tacna',
//            'Tumbes',
//            'Ucayali'
//        );
//        foreach($departamentos as $departamento) {
//            $entidad = new Departamento();
//            $entidad->setDescripcion($departamento);
//            
//            $em->persist($entidad);
//        }
//        $em->flush();
        
        $dep1 = new Departamento(); $dep1->setDescripcion('Amazonas');$em->persist($dep1);
        $dep2 = new Departamento(); $dep2->setDescripcion('Ancash');$em->persist($dep2);
        $dep3 = new Departamento(); $dep3->setDescripcion('Apurimac');$em->persist($dep3);
        $dep4 = new Departamento(); $dep4->setDescripcion('Arequipa');$em->persist($dep4);
        $dep5 = new Departamento(); $dep5->setDescripcion('Ayacucho');$em->persist($dep5);
        $dep6 = new Departamento(); $dep6->setDescripcion('Cajamarca');$em->persist($dep6);
        $dep7 = new Departamento(); $dep7->setDescripcion('Callao');$em->persist($dep7);
        $dep8 = new Departamento(); $dep8->setDescripcion('Cuzco');$em->persist($dep8);
        $dep9 = new Departamento(); $dep9->setDescripcion('Huancavelica');$em->persist($dep9);
        $dep10 = new Departamento(); $dep10->setDescripcion('Huanuco');$em->persist($dep10);
        $dep11 = new Departamento(); $dep11->setDescripcion('Ica');$em->persist($dep11);
        $dep12 = new Departamento(); $dep12->setDescripcion('Junin');$em->persist($dep12);
        $dep13 = new Departamento(); $dep13->setDescripcion('La Libertad');$em->persist($dep13);
        $dep14 = new Departamento(); $dep14->setDescripcion('Lambayeque');$em->persist($dep14);
        $dep15 = new Departamento(); $dep15->setDescripcion('Lima');$em->persist($dep15);
        $dep16 = new Departamento(); $dep16->setDescripcion('Loreto');$em->persist($dep16);
        $dep17 = new Departamento(); $dep17->setDescripcion('Madre de Dios');$em->persist($dep17);
        $dep18 = new Departamento(); $dep18->setDescripcion('Moquegua');$em->persist($dep18);
        $dep19 = new Departamento(); $dep19->setDescripcion('Pasco');$em->persist($dep19);
        $dep20 = new Departamento(); $dep20->setDescripcion('Piura');$em->persist($dep20);
        $dep21 = new Departamento(); $dep21->setDescripcion('Puno');$em->persist($dep21);
        $dep22 = new Departamento(); $dep22->setDescripcion('San Martin');$em->persist($dep22);
        $dep23 = new Departamento(); $dep23->setDescripcion('Tacna');$em->persist($dep23);
        $dep24 = new Departamento(); $dep24->setDescripcion('Tumbes');$em->persist($dep24);
        $dep25 = new Departamento(); $dep25->setDescripcion('Ucayali');$em->persist($dep25);
        
        $em->flush();
        
        $this->addReference('AM',$dep1);
        $this->addReference('AN',$dep2);
        $this->addReference('AP',$dep3);
        $this->addReference('AR',$dep4);
        $this->addReference('AY',$dep5);
        $this->addReference('CA',$dep6);
        $this->addReference('CLL',$dep7);
        $this->addReference('CU',$dep8);
        $this->addReference('HV',$dep9);
        $this->addReference('HU',$dep10);
        $this->addReference('IC',$dep11);
        $this->addReference('JN',$dep12);
        $this->addReference('LL',$dep13);
        $this->addReference('LA',$dep14);
        $this->addReference('LI',$dep15);
        $this->addReference('LO',$dep16);
        $this->addReference('MD',$dep17);
        $this->addReference('MO',$dep18);
        $this->addReference('PA',$dep19);
        $this->addReference('PI',$dep20);
        $this->addReference('PU',$dep21);
        $this->addReference('SM',$dep22);
        $this->addReference('TA',$dep23);
        $this->addReference('TU',$dep24);
        $this->addReference('UC',$dep25);
    }

    public function getOrder() {
        return 1;
    }
    
    
}
?>
