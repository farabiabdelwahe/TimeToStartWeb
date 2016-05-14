<?php

namespace User\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use User\UserBundle\Form\UserForm;
use User\UserBundle\Entity\report;
/**
 * Description of UserController
 *
 * @author MICRO
 */
class reportController extends Controller{
    
    public function listerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("UserUserBundle:report")->findAll();
        return $this->render("UserUserBundle:reporting:list.html.twig", array("ms"=>$users));
        
    }   
  
     public function updatingAction()
       {
          $req= $this->get('request');
          $id= $req->get('id');
         
          $em = $this->getDoctrine()->getManager();
        
          $user = $em->getRepository("UserUserBundle:report")->find($id);
          $userType = new UserForm();
          $form = $this ->createForm($userType,$user);
          
          $form -> handleRequest($req);
          
           if ($form->isValid())
          {
              $em = $this->getDoctrine()->getManager();
              $em ->persist($user);
              $em->flush();
                return $this->redirectToRoute("user_user_profilereporting");
     
          }            
        
                          return $this ->render("UserUserBundle:reporting:updatem.html.twig", array("f"=>$form->createView()));

      } 
    
    
   
      public function searchAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("UserUserBundle:report");
        
        $req= $this->get('request');
        
         if ($req->getMethod()=="POST")
          {
              $search = $req->get('s');
              $user = $em->getRepository("UserUserBundle:report")->findById($search);
              //var_dump($search);
// ou bien $voiture = $em->getRepository("EspritParcBundle:Voiture")->findBy(array("serie"=>$search, "marque"=>$marque));
          
         /*     $mm = $req->get('m');
              $voiture = $em->getRepository("EspritParcBundle:Voiture")->findBy(array("serie"=>$search, "marque"=>$mm)); */
          }  
          
        return $this ->render("UserUserBundle:reporting:FindReport.html.twig", array("ms"=>$user));
        
         
    }
    
    public function deleteAction()
      {
          $req= $this->get('request');
          $id= $req->get('id');
          $em = $this->getDoctrine()->getManager();
        
          $voiture = $em->getRepository("UserUserBundle:report")->find($id);
           $em->remove($voiture);
           $em->flush();
           
          return $this->redirectToRoute("user_user_profilereporting");
    
          
      }   
    
    
        }
