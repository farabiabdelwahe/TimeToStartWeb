<?php

namespace User\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use User\UserBundle\Entity\feedback;
use User\UserBundle\Form\feedForm;
use User\UserBundle\Form\feednoForm;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\User;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle;
class feedbackController extends Controller{
    
    
      public function addAction()
      {
          $user = $this->get('security.token_storage')->getToken()->getUser();
         $feed = new feedback();
         $feed->setIduser($user->getId());
         
          $feedType = new feednoForm();
          $form = $this ->createForm($feedType, $feed);
          
          $req= $this->get('request');
          $form -> handleRequest($req);
          
          if ($form->isValid())
          {
            
                $em = $this->getDoctrine()->getManager();
//          return new \Symfony\Component\HttpFoundation\Response (     var_dump($feed));
              $em ->persist($feed);
              $em->flush();
              return $this->redirectToRoute("User_homepagingfeed");
                      
          }    
         
          return $this ->render("UserUserBundle:feedback:add.html.twig", array('f'=>$form->createView()));
      }
      
      
    public function listerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("UserUserBundle:feedback")->findAll();
        return $this->render("UserUserBundle:feedback:list.html.twig", array("ms"=>$users));
        
    }   
  
     public function updatingAction()
       {
          $req= $this->get('request');
          $id= $req->get('id');
         
          $em = $this->getDoctrine()->getManager();
        
          $user = $em->getRepository("UserUserBundle:feedback")->find($id);
          $userType = new feedForm();
          $form = $this ->createForm($userType,$user);
          
          $form -> handleRequest($req);
          
           if ($form->isValid())
          {
              $em = $this->getDoctrine()->getManager();
              $em ->persist($user);
              $em->flush();
                return $this->redirectToRoute("User_homepagingfeed");
     
          }            
        
                          return $this ->render("UserUserBundle:feedback:updatem.html.twig", array("f"=>$form->createView()));

      } 
    
    
   
      public function searchAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("UserUserBundle:feedback");
        
        $req= $this->get('request');
        
         if ($req->getMethod()=="POST")
          {
              $search = $req->get('s');
              $user = $em->getRepository("UserUserBundle:feedback")->findByIdproject($search);
              //var_dump($search);
// ou bien $voiture = $em->getRepository("EspritParcBundle:Voiture")->findBy(array("serie"=>$search, "marque"=>$marque));
          
         /*     $mm = $req->get('m');
              $voiture = $em->getRepository("EspritParcBundle:Voiture")->findBy(array("serie"=>$search, "marque"=>$mm)); */
          }  
          
        return $this ->render("UserUserBundle:feedback:finding.html.twig", array("ms"=>$user));
        
         
    }
    
    public function deleteAction()
      {
          $req= $this->get('request');
          $id= $req->get('id');
          $em = $this->getDoctrine()->getManager();
        
          $voiture = $em->getRepository("UserUserBundle:feedback")->find($id);
           $em->remove($voiture);
           $em->flush();
           
          return $this->redirectToRoute("User_homepagingfeed");
    
          
      }   
    
    
        }
