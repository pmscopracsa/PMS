<?php

namespace Pms\ContactoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

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
}
