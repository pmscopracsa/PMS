<?php

namespace Pms\ContactoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ContactoLista
{
  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\Contacto")
   */
  protected $contacto;

  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\ListaDistribucion")
   */
  protected $listadistribucion;

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

    /**
     * Set listadistribucion
     *
     * @param Pms\ContactoBundle\Entity\ListaDistribucion $listadistribucion
     */
    public function setListadistribucion(\Pms\ContactoBundle\Entity\ListaDistribucion $listadistribucion)
    {
        $this->listadistribucion = $listadistribucion;
    }

    /**
     * Get listadistribucion
     *
     * @return Pms\ContactoBundle\Entity\ListaDistribucion 
     */
    public function getListadistribucion()
    {
        return $this->listadistribucion;
    }
}