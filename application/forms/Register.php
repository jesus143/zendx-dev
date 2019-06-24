<?php

class Application_Form_Register extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */

        $this->addElement('text', 'email');
        $this->addElement('text', 'login');
        $this->addElement('password', 'password');
        $this->addElement('submit', 'save');

    }
}

