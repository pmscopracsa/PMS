<?php

namespace Pms\ContactoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Compania
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  protected $id;

  /**
   * @ORM\Column(type="string", length="11")
   */
  protected $ruc;

  /**
   * @ORM\Column(type="string", length="100")
   */
  protected $nombre;

  /**
   * @ORM\Column(type="string", length="100")
   */
  protected $nombrecomercial;

  /**
   * @ORM\Column(type="string", length="50")
   */
  protected $partidaregistral;

  /**
   * @ORM\Column(type="string", length="150")
   */
  protected $giro;

  /**
   * @ORM\Column(type="string", length="100")
   */
  protected $actividadprincipal;

  /**
   * @ORM\Column(type="string", length="50")
   */
  protected $fax;

  /**
   * @ORM\Column(type="string", length="150")
   */
  protected $observacion;

  /**
   * @ORM\Column(type="string", length="100")
   */
  protected $email;

  /**
   * @ORM\Column(type="string", length="50")
   */
  protected $web;

  /**
   * @ORM\ManyToOne(targetEntity="Pms\ContactoBundle\Entity\TipoCompania")
   * @ORM\JoinColumn(name="tipocompania_id", referencedColumnName="id")
   */

  protected $tipocompania;

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
     * Set ruc
     *
     * @param string $ruc
     */
    public function setRuc($ruc)
    {
        $this->ruc = $ruc;
    }

    /**
     * Get ruc
     *
     * @return string 
     */
    public function getRuc()
    {
        return $this->ruc;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set nombrecomercial
     *
     * @param string $nombrecomercial
     */
    public function setNombrecomercial($nombrecomercial)
    {
        $this->nombrecomercial = $nombrecomercial;
    }

    /**
     * Get nombrecomercial
     *
     * @return string 
     */
    public function getNombrecomercial()
    {
        return $this->nombrecomercial;
    }

    /**
     * Set partidaregistral
     *
     * @param string $partidaregistral
     */
    public function setPartidaregistral($partidaregistral)
    {
        $this->partidaregistral = $partidaregistral;
    }

    /**
     * Get partidaregistral
     *
     * @return string 
     */
    public function getPartidaregistral()
    {
        return $this->partidaregistral;
    }

    /**
     * Set giro
     *
     * @param string $giro
     */
    public function setGiro($giro)
    {
        $this->giro = $giro;
    }

    /**
     * Get giro
     *
     * @return string 
     */
    public function getGiro()
    {
        return $this->giro;
    }

    /**
     * Set actividadprincipal
     *
     * @param string $actividadprincipal
     */
    public function setActividadprincipal($actividadprincipal)
    {
        $this->actividadprincipal = $actividadprincipal;
    }

    /**
     * Get actividadprincipal
     *
     * @return string 
     */
    public function getActividadprincipal()
    {
        return $this->actividadprincipal;
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
     * Set tipocompania
     *
     * @param Pms\ContactoBundle\Entity\TipoCompania $tipocompania
     */
    public function setTipocompania(\Pms\ContactoBundle\Entity\TipoCompania $tipocompania)
    {
        $this->tipocompania = $tipocompania;
    }

    /**
     * Get tipocompania
     *
     * @return Pms\ContactoBundle\Entity\TipoCompania 
     */
    public function getTipocompania()
    {
        return $this->tipocompania;
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