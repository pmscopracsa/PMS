<?php

namespace Pms\ContactoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class Compania
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  protected $id;

  /**
   * @ORM\Column(type="string", length=11)
   */
  protected $ruc;

  /**
   * @ORM\Column(type="string", length=100)
   */
  protected $nombre;

  /**
   * @ORM\Column(type="string", length=100)
   */
  protected $nombrecomercial;

  /**
   * @ORM\Column(type="string", length=50)
   */
  protected $partidaregistral;

  /**
   * @ORM\Column(type="string", length=150)
   */
  protected $giro;

  /**
   * @ORM\Column(type="string", length=100)
   */
  protected $actividadprincipal;

  /**
   * @ORM\Column(type="string", length=50)
   */
  protected $fax;

  /**
   * @ORM\Column(type="string", length=150)
   */
  protected $observacion;

  /**
   * @ORM\Column(type="string", length=100)
   */
  protected $email;

  /**
   * @ORM\Column(type="string", length=50)
   */
  protected $web;

  /**
   * @ORM\ManyToOne(targetEntity="Pms\CompaniaBundle\Entity\TipoCompania")
   */
  protected $tipocompania;

  /**
   * @ORM\ManyToOne(targetEntity="Pms\CompaniaBundle\Entity\ViaEnvio")
   */
  protected $viaenvio;
}  
