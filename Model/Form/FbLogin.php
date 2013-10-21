<?php

class Auth_Model_Form_FbLogin extends DZend_Form
{
    public function init()
    {
        $e = new Zend_Form_Element_Hidden('authority');
        $e->setValue('db');
        $this->addElement($e);
        $this->setDefault('authority', 'facebook');

        $this->setMethod('post');
        $this->setName('fblogin');
        $this->setAction('/Auth/index/login');
    }
}
