<?php

class Application_Form_RegisterSaveForm extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */


        $name = new Zend_Form_Element_Text('name');

        $name->setLabel('name')
            ->addFilter('StripTags')
            ->setRequired(true);

        $password = new Zend_Form_Element_Password('password');
        $password->setLabel('password')->addFilter('StripTags')->setRequired(true);

        $submit = new Zend_Form_Element_Submit('subbbbbb');
        $submit->setLabel('Submit Son');

        $this->addElements(array($name, $password, $submit));
    }


}

