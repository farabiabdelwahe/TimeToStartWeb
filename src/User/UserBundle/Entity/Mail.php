<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mail
 *
 * @author Mohamed Raid Raddaou
 */
namespace User\UserBundle\Entity;
class Mail {
private $username;
private $tel;
private $from;
private $text;
private $to;
private $lastname;
private $firstname;

function getTo() {
    return $this->to;
}

function setTo($to) {
    $this->to = $to;
}
function getUsername() {
    return $this->username;
}

function setUsername($username) {
    $this->username = $username;
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


function getTel() {
    return $this->tel;
}

function getFrom() {
    return $this->from;
}

function getText() {
    return $this->text;
}


function setTel($tel) {
    $this->tel = $tel;
}

function setFrom($from) {
    $this->from = $from;
}

function setText($text) {
    $this->text = $text;
}


}