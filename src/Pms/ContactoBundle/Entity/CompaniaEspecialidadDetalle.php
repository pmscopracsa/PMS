<?php

namespace Pms\ContactoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

 class CompaniaEspecialidadDetalle
 {
   /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\Compania")
    */
  protected $compania;

  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\EspecialidadCompania")
   */
  protected $especialidadcompania;
 
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
     * Set especialidadcompania
     *
     * @param Pms\ContactoBundle\Entity\EspecialidadCompania $especialidadcompania
     */
    public function setEspecialidadcompania(\Pms\ContactoBundle\Entity\EspecialidadCompania $especialidadcompania)
    {
        $this->especialidadcompania = $especialidadcompania;
    }

    /**
     * Get especialidadcompania
     *
     * @return Pms\ContactoBundle\Entity\EspecialidadCompania 
     */
    public function getEspecialidadcompania()
    {
        return $this->especialidadcompania;
    }
}