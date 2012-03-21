<?php

namespace Pms\ContactoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Distrito
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  protected $id;

  /**
   * @ORM\Column(type="string", length="100")
   */
  protected $descripcion;
  
  /**
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\Provincia")
   * @ORM\JoinColumn(name="provincia_id", referencedColumnName="id") 
   */
  protected $provincia;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set provincia
     *
     * @param Pms\ContactoBundle\Entity\Provincia $provincia
     */
    public function setProvincia(\Pms\ContactoBundle\Entity\Provincia $provincia)
    {
        $this->provincia = $provincia;
    }

    /**
     * Get provincia
     *
     * @return Pms\ContactoBundle\Entity\Provincia 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }
}