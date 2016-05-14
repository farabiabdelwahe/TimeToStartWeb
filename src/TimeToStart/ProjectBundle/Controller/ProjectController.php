<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TimeToStart\ProjectBundle\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TimeToStart\ProjectBundle\Entity\Project;
use TimeToStart\ProjectBundle\Form\ProjectFrom;






/**
 * Description of ProjectController
 *
 * @author GSC
 */

class ProjectController extends Controller {

    
    
        public function  addAction(){
        $Project=new Project();
        $f1= new ProjectFrom();
       $form= $this->CreateForm($f1,$Project); 
       
       $req= $this->get('request');
       $form->handleRequest($req);
       
       if ( $form->isValid()){
           
               $file = $Project->getFilelink();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/upload';
            $file->move($brochuresDir, $fileName);
               $file1 = $Project->getImagelink();
            $fileName1 = md5(uniqid()).'.'.$file1->guessExtension();
            $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/upload';
            $file1->move($brochuresDir, $fileName1);
            $Project->setImagelink('http://localhost/TST3/web/upload/'.$fileName1);
             $Project->setFilelink('http://localhost/TST3/web/upload/'.$fileName);
           $time = new DateTime();
           $Project->setDatecreation($time);
           $user = $this->get('security.token_storage')->getToken()->getUser();
           $Project->setIduser($user->getId());
           $em=$this->getDoctrine()->getManager();
           $em->persist($Project);
           $em->flush();
           
             
     
     
        

       }
        $em=$this->getDoctrine()->getManager(); 
$user = $this->get('security.token_storage')->getToken()->getUser();

              $V=$em->getRepository("TimeToStartProjectBundle:Project")->findBy(
    array('iduser' =>$user->getId()));
                     $s=$em->getRepository("UserUserBundle:User")->findBy(
    array('id' =>$user->getId()));
              
              
                      

        return $this->render('TimeToStartProjectBundle:Project:Project.html.twig', array("f"=>$form->createView(),"v"=>$V));
        
       
    //put your code here
}


  public function searchAction(){
          $em=$this->getDoctrine()->getManager();  
           $req=$this->get('request');
       
          if ($req->getMethod()=="POST")
          {
                $s=$req->get("s");
                
                $query = $em->createQuery(
    'SELECT  p
    FROM TimeToStartProjectBundle:Project  p
    WHERE p.name like :price
    '
)->setParameter('price', '%'.$s.'%');
              $Project=$query->getResult();
              return $this->render("TimeToStartProjectBundle:Project:Search.html.twig",array("v"=>$Project)) ; 
              
        
          }
          
          $V=$em->getRepository("TimeToStartProjectBundle:Project")->findAll();
          return $this->render("TimeToStartProjectBundle:Project:Search.html.twig",array("v"=>$V)) ;         
          
          
          
          
          
      }
      
           
      public function updateAction(){
          
          $req= $this->get('request');
          $id=$req->get('id');
          $em= $this->getDoctrine()->getManager()   ;
          $Project=$em->getRepository("TimeToStartProjectBundle:Project")->find($id);
          
          $f= new ProjectFrom();
               $time = new DateTime();
              $Project->setTaskdate($time);
          $form=$this->createForm($f,  $Project);
          $form->handleRequest($req);
          if ($form->isValid()){
             
      $file = $Project->getFilelink();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/upload';
            $file->move($brochuresDir, $fileName);
               $file1 = $Project->getImagelink();
            $fileName1 = md5(uniqid()).'.'.$file1->guessExtension();
            $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/upload';
            $file1->move($brochuresDir, $fileName1);
            $Project->setImagelink('http://localhost/TST3/web/upload/'.$fileName1);
             $Project->setFilelink('http://localhost/TST3/web/upload/'.$fileName);
        
      
           $em->persist($Project);
           $em->flush();
           
$user = $this->get('security.token_storage')->getToken()->getUser();

              $V=$em->getRepository("TimeToStartProjectBundle:Project")->findBy(
    array('iduser' =>$user->getId()));
        return $this->render('TimeToStartProjectBundle:Project:Project.html.twig', array("f"=>$form->createView(),"v"=>$V));
        
     
              
          }
         
           return $this->render('TimeToStartProjectBundle:Project:Update.html.twig', array("f"=>$form->createView(),"test"=>$Project));
      } 
      
      
              public function  indexAction(){
                            $req= $this->get('request');
          $id=$req->get('id');
          $em= $this->getDoctrine()->getManager()   ;
          $Project=$em->getRepository("TimeToStartProjectBundle:Project")->find($id);
                               $V=$em->getRepository("UserUserBundle:User")->findOneBy(
    array('id' =>$Project->getIduser()));

  
        return $this->render('TimeToStartProjectBundle:Project:ProjectLayout.html.twig', array("m"=>$Project,"V"=>$V->getUsername()));
        
       
    //put your code here
}

}
