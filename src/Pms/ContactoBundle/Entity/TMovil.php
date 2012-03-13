<?php

namespace Pms\ContactoBundle\Entity;
use Doctrin\ORM\Mapping as ORM;

class TMovil
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  protected $id;

  /**
   * @ORM\Column(type="string", length=15)
   */
  protected $numero;
}
