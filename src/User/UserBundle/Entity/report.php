<?php

namespace User\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="report")
*/
class report 
{
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
protected $id;

/**
*
* @ORM\Column(type="integer")
* 
*/
protected $idprojet;

/**
*
* @ORM\Column(type="string", length=20)
* 
*/
protected $content;
function getId() {
    return $this->id;
}

function getIdprojet() {
    return $this->idprojet;
}

function getContent() {
    return $this->content;
}

function setId($id) {
    $this->id = $id;
}

function setIdprojet($idprojet) {
    $this->idprojet = $idprojet;
}

function setContent($content) {
    $this->content = $content;
}


}
