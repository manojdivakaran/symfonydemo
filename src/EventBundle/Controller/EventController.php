<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace EventBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of EventController
 *
 * @author mdivakaran
 */
class EventController extends Controller {
   public function indexAction()
    {
        return $this->render('EventBundle:Default:index.html.twig');
       
    }
    
    public function TestAction($param1)
    {
        return $this->render('EventBundle:Default:index.html.twig',array("param1" => $param1));
       
    }
}
