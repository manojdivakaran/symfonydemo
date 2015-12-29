<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
/**
 * Description of RegistrationController
 *
 * @author mdivakaran
 */
class RegistrationController extends Controller{
    //put your code here
    /**
     *  @Route("/register", name="user_register")
     *  @Template("register/register.html.twig")
     * @Security("is_granted('IS_AUTHENTICATED_ANONYMOUSLY')")
     */
    public function registerAction(Request $request)
    {
        $form = $this->createFormBuilder()
                ->add('username',EmailType::Class)
                ->add('password',RepeatedType::Class, array('type' => PasswordType::Class))
                ->getForm();
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           # var_dump($form->getData());
            $data = $form->getData();
            $user = new User();
            $user->setUsername($data['username']);
            $user->setPassword($this->encodePassword($user,$data['password']));
            $user->setRoles(array("ROLE_ADMIN"));
            #$user->setRole("ROLE_USER");
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $url=$this->generateUrl('book_index');
            return $this->redirect($url);
            
        }
        return array('form' => $form->createView());
    
    }
    private function encodePassword(User $user, $plainPassword)
    {
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
                return $encoder->encodePassword($plainPassword,$user->getSalt());
        
    }
}
