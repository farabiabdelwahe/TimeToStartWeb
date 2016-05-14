<?php


namespace User\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class feednoForm extends AbstractType {
    public function getName() {
        return 'feednoForm';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
               // ->add('iduser')
              

                 ->add('Text')
              ->add('Date', 'date', array('data' => new \DateTime('now')))
                  ->add('idproject')
                
             
               // ->add('idModele', 'entity', array("class"=>"EspritParcBundle:Modele","property"=>"libelle","label"=>"Le modele est : "))
                ->add('valider','submit');
    }
}
