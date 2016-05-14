<?php

namespace User\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
/**
* @ORM\Entity
* @ORM\Table(name="fos_user")
*/
class User extends BaseUser
{
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
protected $id;

/**
*
* @ORM\Column(type="string", length=255)
* 
*/
protected $qualification;

/**
*
* @ORM\Column(type="string", length=255)
* 
*/
protected $lastname;
/**
*
* @ORM\Column(type="string", length=255)
* 
*/
protected $firstname;

function getQualification() {
    return $this->qualification;
}

function getLastname() {
    return $this->lastname;
}

function getFirstname() {
    return $this->firstname;
}

function setLastname($lastname) {
    $this->lastname = $lastname;
}

function setFirstname($firstname) {
    $this->firstname = $firstname;
}



function setQualification($qualification) {
    $this->qualification = $qualification;
}

public function __construct()
{
parent::__construct();
// your own logic
$this->addRole("ROLE_CLIENT");
}

}
