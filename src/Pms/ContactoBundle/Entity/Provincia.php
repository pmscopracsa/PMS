<?php

namespace Pms\ContactoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Provincia
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  protected $id;

  /**
   * @ORM\Column(type="string", length=100)
   */
  protected $descripcion;
    
  /**
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\Departamento")
   * @ORM\JoinColumn(name="departamento_id", referencedColumnName="id") 
   */
  protected $departamento;
  

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
     * Set departamento
     *
     * @param Pms\ContactoBundle\Entity\Departamento $departamento
     */
    public function setDepartamento(\Pms\ContactoBundle\Entity\Departamento $departamento)
    {
        $this->departamento = $departamento;
    }

    /**
     * Get departamento
     *
     * @return Pms\ContactoBundle\Entity\Departamento 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }
}