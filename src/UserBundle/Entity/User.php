<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * User
 *
 * @ORM\Table(name="BookUser")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User Implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

   
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    
    
    public function eraseCredentials()
    {
        //logic later
        
    }
    
    public function getSalt()
    {
        return null;
        
    }
   
    /**
     * @var string
     *
     * @ORM\Column(name="roles", type="json_array")
     */
    private $roles = array();
    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;
        
    }
    
     
    public function getRoles()
    {
        return $this->roles;
        
    }
}


