<?php

namespace User\UserBundle\Controller;
use FOS\UserBundle\Model\User;
use FOS\UserBundle;
use User\UserBundle\Entity\Mail;
use FOS\UserBundle\Model\UserInterface;
use User\UserBundle\Form\MailType;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\GetResponseUserEvent;

use Swift_Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MailController extends Controller 
{
 public function indexAction() {
return $this->render('MyAppMailBundle:Default:mail.html.twig', array());
return 'Mail';

 }




public function sendMailAction() {

    $mail = new Mail();
//     $to = $mail->getTo();
    $form= $this->createForm(new MailType(), $mail);
   $request = $this->get('request');
    $form->handleRequest($request) ;
    if ($form->isValid()) {
    $message = Swift_Message::newInstance()
    
    ->setFrom($mail-> getFrom())
    ->setTo($mail->getTo())
    ->setBody($mail->getText());
    $this->get('mailer')->send($message);
    return $this->render('UserUserBundle:User:Affichage.html.twig', array('to' => $mail->getTo()));
}
return $this->redirect($this->generateUrl('my_app_mail_form'));}

public function newAction() {
    
$user = $this->get('security.token_storage')->getToken()->getUser();
  
$mail = new Mail();
$mail->setFrom($user->getEmail());
$mail->setUserName($user->getUserName());
$request = $this->get('request');
  $ma=$request->get('email');
    $mail->setTo($ma);
$form= $this-> createForm(new MailType(), $mail);


$form->handleRequest($request) ;
if ($form->isValid()) {
    
$this->sendMailAction($ma, $user->getEmail(), $mail->getUserName(), $mail->getText());
}
return $this->render('UserUserBundle:User:mailing.html.twig', array('form' => $form->createView())) ; }

}


