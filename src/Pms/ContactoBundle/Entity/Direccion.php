<?php

namespace Pms\ContactoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class Direccion
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  protected $id;

  /**
   * @ORM\Column(type="string", length=150")
   */
  protected $descripcion;
}
