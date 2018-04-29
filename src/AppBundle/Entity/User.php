<?php
/**
 * Created by PhpStorm.
 * User: audioxtreme
 * Date: 28/04/18
 * Time: 16:28
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $name;
    /**
     * @ORM\Column(type="string")
     */
    private $lastName;
    /**
     * @ORM\Column(type="string")
     */
    private $password;

    private $plainPassword;
    /**
     * @ORM\Column(type="json_array")
     */
    private $roles = [];

    public function getUsername()
    {
        return $this->name;
    }

    public function getRoles()
    {
        $roles = $this->roles;

        if(!in_array('ROLE_USER', $roles)){
            $roles[] = 'ROLE_USER';
        }
            return $roles;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getSalt()
    {

    }

    public function eraseCredentials()
    {
        $this->plainPassword = null;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
        $this->password = null;
    }

    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getFullName()
    {
        return trim($this->getUsername().' '.$this->getLastName());

    }

}