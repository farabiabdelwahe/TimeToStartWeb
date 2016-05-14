<?php

namespace User\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="feedback")
*/
class feedback 
{
    
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue
*/
    
private $idfeedback;

/**
*
* @ORM\Column(type="string", length=255)
* 
*/
private $Text;

/**
* 
* @ORM\Column(type="datetime",nullable=true)
*/
private $Date;

/**
*
* @ORM\Column(type="integer")
* 
*/
private $iduser;

/**
*
* @ORM\Column(type="integer")
* 
*/
private $idproject;

/**
*
* @ORM\Column(type="integer")
* 
*/
private $ban=0;
function getIdfeedback() {
    return $this->idfeedback;
}

function getText() {
    return $this->Text;
}

function getDate() {
    return $this->Date;
}

function getIduser() {
    return $this->iduser;
}

function getIdproject() {
    return $this->idproject;
}

function getBan() {
    return $this->ban;
}

function setIdfeedback($idfeedback) {
    $this->idfeedback = $idfeedback;
}

function setText($Text) {
    $this->Text = $Text;
}

function setDate($Date) {
    $this->Date = $Date;
}

function setIduser($iduser) {
    $this->iduser = $iduser;
}

function setIdproject($idproject) {
    $this->idproject = $idproject;
}

function setBan($ban) {
    $this->ban = $ban;
}


}
