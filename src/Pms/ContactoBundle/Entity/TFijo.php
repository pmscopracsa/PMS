<?php

namespace Pms\ContactoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class TFijo
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
