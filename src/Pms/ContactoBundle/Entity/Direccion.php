<?php

namespace Pms\ContactoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Direccion
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
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\Compania")
   * @ORM\JoinColumn(name="compania_id", referencedColumnName="id")
   */
  protected $compania;

  /**
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\Distrito")
   * @ORM\JoinColumn(name="distrito_id", referencedColumnName="id")
   */
  protected $distrito;

  /**
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\Departamento")
   * @ORM\JoinColumn(name="departamento_id", referencedColumnName="id")
   */
  protected $departamento;

  /**
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\Provincia")
   * @ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
   */
  protected $provincia;

  /**
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\TipoDireccion")
   * @ORM\JoinColumn(name="tipodireccion_id", referencedColumnName="id")
   */
  protected $tipodireccion;

  /**
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\Contacto")
   * @ORM\JoinColumn(name="contacto_id", referencedColumnName="id")
   */
  protected $contacto;

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
     * Set compania
     *
     * @param Pms\ContactoBundle\Entity\Compania $compania
     */
    public function setCompania(\Pms\ContactoBundle\Entity\Compania $compania)
    {
        $this->compania = $compania;
    }

    /**
     * Get compania
     *
     * @return Pms\ContactoBundle\Entity\Compania 
     */
    public function getCompania()
    {
        return $this->compania;
    }

    /**
     * Set distrito
     *
     * @param Pms\ContactoBundle\Entity\Distrito $distrito
     */
    public function setDistrito(\Pms\ContactoBundle\Entity\Distrito $distrito)
    {
        $this->distrito = $distrito;
    }

    /**
     * Get distrito
     *
     * @return Pms\ContactoBundle\Entity\Distrito 
     */
    public function getDistrito()
    {
        return $this->distrito;
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

    /**
     * Set tipodireccion
     *
     * @param Pms\ContactoBundle\Entity\TipoDireccion $tipodireccion
     */
    public function setTipodireccion(\Pms\ContactoBundle\Entity\TipoDireccion $tipodireccion)
    {
        $this->tipodireccion = $tipodireccion;
    }

    /**
     * Get tipodireccion
     *
     * @return Pms\ContactoBundle\Entity\TipoDireccion 
     */
    public function getTipodireccion()
    {
        return $this->tipodireccion;
    }

    /**
     * Set contacto
     *
     * @param Pms\ContactoBundle\Entity\Contacto $contacto
     */
    public function setContacto(\Pms\ContactoBundle\Entity\Contacto $contacto)
    {
        $this->contacto = $contacto;
    }

    /**
     * Get contacto
     *
     * @return Pms\ContactoBundle\Entity\Contacto 
     */
    public function getContacto()
    {
        return $this->contacto;
    }
}