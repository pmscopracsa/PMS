<?php

namespace Pms\ContactoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Contacto
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  protected $id;

  /**
   * @ORM\Column(type="string", length=8)
   */
  protected $dni;

  /**
   * @ORM\Column(type="string", length=100)
   */
  protected $nombres;

  /**
   * @ORM\Column(type="string", length=50)
   */
  protected $cargo;

  /**
   * @ORM\Column(type="string", length=10)
   */
  protected $fax;

  /**
   * @ORM\Column(type="string", length=50)
   */
  protected $observacion;

  /**
   * @ORM\Column(type="string", length=25)
   */
  protected $email;

  /**
   * @ORM\Column(type="string", length=30)
   */
  protected $web;

  /**
   * @ORM\Column(type="string", length=50)
   */
  protected $firma;

  /**
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\Compania")
   * @ORM\JoinColumn(name="cocontacto_id", referencedColumnName="id")
   */
  protected $compania_contacto;

  /**
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\Compania")
   * @ORM\JoinColumn(name="corepresentante_id", referencedColumnName="id")
   */
  protected $compania_representante;

  /**
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\ViaEnvio")
   * @ORM\JoinColumn(name="viaenvio_id", referencedColumnName="id")
   */
  protected $viaenvio;

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
     * Set dni
     *
     * @param string $dni
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set fax
     *
     * @param string $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
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

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set web
     *
     * @param string $web
     */
    public function setWeb($web)
    {
        $this->web = $web;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set firma
     *
     * @param string $firma
     */
    public function setFirma($firma)
    {
        $this->firma = $firma;
    }

    /**
     * Get firma
     *
     * @return string 
     */
    public function getFirma()
    {
        return $this->firma;
    }

    /**
     * Set compania_contacto
     *
     * @param Pms\ContactoBundle\Entity\Compania $companiaContacto
     */
    public function setCompaniaContacto(\Pms\ContactoBundle\Entity\Compania $companiaContacto)
    {
        $this->compania_contacto = $companiaContacto;
    }

    /**
     * Get compania_contacto
     *
     * @return Pms\ContactoBundle\Entity\Compania 
     */
    public function getCompaniaContacto()
    {
        return $this->compania_contacto;
    }

    /**
     * Set compania_representante
     *
     * @param Pms\ContactoBundle\Entity\Compania $companiaRepresentante
     */
    public function setCompaniaRepresentante(\Pms\ContactoBundle\Entity\Compania $companiaRepresentante)
    {
        $this->compania_representante = $companiaRepresentante;
    }

    /**
     * Get compania_representante
     *
     * @return Pms\ContactoBundle\Entity\Compania 
     */
    public function getCompaniaRepresentante()
    {
        return $this->compania_representante;
    }

    /**
     * Set viaenvio
     *
     * @param Pms\ContactoBundle\Entity\ViaEnvio $viaenvio
     */
    public function setViaenvio(\Pms\ContactoBundle\Entity\ViaEnvio $viaenvio)
    {
        $this->viaenvio = $viaenvio;
    }

    /**
     * Get viaenvio
     *
     * @return Pms\ContactoBundle\Entity\ViaEnvio 
     */
    public function getViaenvio()
    {
        return $this->viaenvio;
    }
}