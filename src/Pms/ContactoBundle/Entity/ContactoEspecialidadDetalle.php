<?php

namespace Pms\ContactoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ContactoEspecialidadDetalle
{
  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\Contacto")
   */
  protected $contacto;

  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\EspecialidadContacto")
   */
  protected $especialidadcontacto;

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
     * Set especialidadcontacto
     *
     * @param Pms\ContactoBundle\Entity\EspecialidadContacto $especialidadcontacto
     */
    public function setEspecialidadcontacto(\Pms\ContactoBundle\Entity\EspecialidadContacto $especialidadcontacto)
    {
        $this->especialidadcontacto = $especialidadcontacto;
    }

    /**
     * Get especialidadcontacto
     *
     * @return Pms\ContactoBundle\Entity\EspecialidadContacto 
     */
    public function getEspecialidadcontacto()
    {
        return $this->especialidadcontacto;
    }
}