<?php

namespace Application\Entity;

use Application\Entity\EntityAbstract;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Application\Mapper\User")
 * @ORM\Table(name="user")
 */
class User extends EntityAbstract
{

    /** @ORM\Id @ORM\GeneratedValue @ORM\Column(type="integer") */
    private $id;

    /**
    * @ORM\Column(type="string", length=128)
    */
    private $email;

    /**
    * Password
    *
    * @ORM\Column(type="string")
    *
    * @var string
    */
    protected $password;

    /**
    *
    * @ORM\OneToOne(targetEntity="Profile",fetch="LAZY" , cascade={"persist","merge","detach"})
    *
    * @var Profile
    */
    protected $profile;

    /**
    * @var datetime $created
    *
    * @ORM\Column(type="datetime")
    */
    private $created;

    /**
    * @var datetime $updated
    *
    * @ORM\Column(type="datetime")
    */
    private $updated;

    function __construct()
    {
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
    }


    /**
     * @param \Application\Entity\datetime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return \Application\Entity\datetime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param \Application\Entity\Profile $profile
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
    }

    /**
     * @return \Application\Entity\Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param \Application\Entity\datetime $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return \Application\Entity\datetime
     */
    public function getUpdated()
    {
        return $this->updated;
    }


    public function setFirstname($firstname)
    {
        if(!is_object($this->getProfile()))
        {
            $this->setProfile(new Profile());
        }

        $this->getProfile()->setFirstName($firstname);
    }

    public function setLastname($lastname)
    {
        if(!is_object($this->getProfile()))
        {
            $this->setProfile(new Profile());
        }

        $this->getProfile()->setLastName($lastname);
    }

    public function getFirstName()
    {
        return $this->getProfile()->getFirstName();
    }

    public function getLastName()
    {
        return $this->getProfile()->getLastName();
    }

}