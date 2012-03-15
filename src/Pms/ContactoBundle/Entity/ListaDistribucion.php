<?php

namespace Pms\ContactoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ListaDistribucion
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
   * @ORM\Column(type="string", length="50")
   */
  protected $cobra;

  /**
   * @ORM\Column(type="string", length="100")
   */
  protected $observacion;

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
     * Set cobra
     *
     * @param string $cobra
     */
    public function setCobra($cobra)
    {
        $this->cobra = $cobra;
    }

    /**
     * Get cobra
     *
     * @return string 
     */
    public function getCobra()
    {
        return $this->cobra;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }
}