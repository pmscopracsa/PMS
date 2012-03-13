<?php
 
 namespace Pms\AutenticaBundle\Entity;
  
 use Symfony\Component\Security\Core\User\UserInterface;
 use Doctrine\ORM\Mapping as ORM;
   
 /**
 * @ORM\Entity
 * @ORM\Table(name="usuarios")
 */
 class Usuario implements UserInterface
 {
 /**
  * @ORM\Id
  * @ORM\Column(type="integer")
  * @ORM\GeneratedValue(strategy="AUTO")
  */
 protected $id;
                     
 /**
  * @ORM\Column(name="usuario", type="string", length="255")
  */
 protected $usuario;
                                                        
 /**
  * @ORM\Column(name="password", type="string", length="255")
  */
 protected $password;
                                                                         
 /**
  * @ORM\Column(name="salt", type="string", length="255")
  */
 protected $salt;
                                                                                  
 /**
  * @ORM\ManyToMany(targetEntity="Rol")
  * @ORM\JoinTable(name="usuario_rol",
  *     joinColumns={@ORM\JoinColumn(name="usuario_id", referencedColumnName="id")},
  *     inverseJoinColumns={@ORM\JoinColumn(name="rol_id", referencedColumnName="id")}
  * )
  */
 protected $roles;
}
