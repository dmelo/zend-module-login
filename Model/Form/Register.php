<?php

/**
 * Auth_Model_Form_Register
 *
 * @package zend-module-login
 * @version 1.0
 * zend-module-login
 * Copyright (C) 2010-2014  Diogo Oliveira de Melo
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
class Auth_Model_Form_Register extends DZend_Form
{
    public function init()
    {
        $element = new Zend_Form_Element_Text('name');
        $element->setRequired();
        $element->setAttrib('placeholder', $this->_t('John Smith'));
        $element->setLabel($this->_t('Name'));
        $this->addElement($element);

        $this->addEmail();
        $this->addPassword();
        $this->addConfirmPassword();
        $this->addSubmit($this->_t('Register'));

        $this->setMethod('post');
    }
}
