<?php


namespace User\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class feedForm extends AbstractType {
    public function getName() {
        return 'feedForm';
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
               // ->add('iduser')
              
                
                ->add('idfeedback')
                 ->add('Text')
          ->add('Date')
                  ->add('idproject')
                ->add('iduser')
                ->add('ban')
               // ->add('idModele', 'entity', array("class"=>"EspritParcBundle:Modele","property"=>"libelle","label"=>"Le modele est : "))
                ->add('valider','submit');
    }
}
