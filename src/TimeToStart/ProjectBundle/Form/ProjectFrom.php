<?php
namespace TimeToStart\ProjectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProjectFrom
 *
 * @author GSC
 */

class ProjectFrom  Extends AbstractType{
    public function getName() {
        
          return 'PROJECTForm' ;
          
        
        
    }
    
        public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add("type",'choice',array('label'=>'Type','choices'=>array('Art'=>'Art','Technology'=>'Technology','Social'=>'Social','Services'=>'Services','Science'=>'Science')))
                ->add("name")
                ->add("description")
          
->add('filelink', 'file',array(
                'data_class' => null))
                ->add('imagelink', 'file',array(
                'data_class' => null))
                ->add("helptype",'choice',array('label'=>'Helptype','choices'=>array('Technical'=>'Technical','Human Resources'=>'Human Resources','Financial'=>'financial')))
               
      ->add("tdiscription") 
          
          -> add('target')

                ->add("prize")
              
                ->add("htask")
                ->add("taskdate")
            
        
               
                ->add( 'valider','submit');
    }
                
            
        
      


//put your code here
}
