<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VoitureForm
 *
 * @author MICRO
 */

namespace User\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class UserForm extends AbstractType {
    public function getName() {
        return 'UserForm';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
               // ->add('iduser')
              
                
                ->add('idprojet')
                  ->add('content')
               // ->add('idModele', 'entity', array("class"=>"EspritParcBundle:Modele","property"=>"libelle","label"=>"Le modele est : "))
                ->add('valider','submit');
    }
}
