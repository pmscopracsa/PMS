<?php

namespace Pms\ContactoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class Representante
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  protected $id;

  /**
   * @ORM\Column(type="string", length=50)
   */
  protected $codigo;

  /**
   * @ORM\Column(type="text")
   */
  protected $descripcion;

  /**
   * @ORM\Column(type="boolean")
   */
  protected $visualizar;
}
