<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MailType
 *
 * @author Mohamed Raid Raddaou
 */
namespace User\UserBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class MailType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder

->add('username', 'text')

->add('from', 'email')
->add('to', 'email')
->add('text', 'textarea')
->add('Send','submit');
}
public function getName()
{
return 'Mail';
}
}