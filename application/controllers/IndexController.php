<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        return "test";
    }

    public function detailsAction()
    {
//        $params = $this->getAllParams();
//
//        echo "<pre>";
//        print_r($params);
//        echo "</pre>";
//
//        $this->view->assign([
//            'name'=> 'Jesus',
//            'surename' => 'Suarez'
//        ]);
//
//        $this->_helper->json($params);


        $form = new Application_Form_Register();
        
        
        $this->view->form = $form;



    }
}

