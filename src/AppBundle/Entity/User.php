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
     * @ORM\Column(type="string", nullable="false")
     */
    private $name;
    /**
     * @ORM\Column(type="string")
     */
    private $password;

    private $plainPassword;
    /**
     * @ORM\Column(type="string")
     */
    private $ocupation;

    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }

    public function getRoles()
    {
        // TODO: Implement getRoles() method.
    }

    public function getPassword()
    {
        // TODO: Implement getPassword() method.
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }


}