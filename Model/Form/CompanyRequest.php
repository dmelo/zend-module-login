<?php

class Form_CompanyRequest extends DZend_Form
{
    public function init()
    {
        $this->setMethod('post');
        $this->addSimpleInput('empresa','Empresa solicitante', true);
        $this->addSimpleInput('cnpj','CNPJ',true);
        $this->addSimpleInput('ie','I.E.',true);

        $e = new Zend_Form_Element_Radio('tipo_empresa');
        $e->setLabel('Tipo da Empresa');
        $e->setRequired(true);
        $e->addMultiOptions(array(
            'osa' => 'OSA',
            'concessionaria' => 'Concessionária',
            'fabricante' => 'Fabricante',
            'integrador' => 'Integrador',
            'outro' => 'Outro'
        ));
        $this->addElement($e);

        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setDecorators(array(
        'ViewHelper',
        array('Description',array('escape'=>false,'tag'=>' span')), //escape false because I want html output
        array('HtmlTag', array('tag' => 'dd')),
        array('Label', array('tag' => 'dt', 'class'=>'hidden')),
        ));

        //add button to form
        $this->addElement($submit);

        $this->submit->setDescription('or <a class="rood" href="' . $this->view->baseUrl() . '/users/">Cancel</a>');

        $this->addSimpleInput('tecnico_nome', 'Nome', true);
        $this->addSimpleInput('tecnico_telefone', 'Telefone', true);
        $this->addSimpleInput('tecnico_email', 'E-mail', true);

        $this->addSimpleInput('sigiloso_nome', 'Nome', true);
        $this->addSimpleInput('sigiloso_telefone', 'Telefone', true);
        $this->addSimpleInput('sigiloso_email', 'E-mail', true);
        $this->addSimpleInput('sigiloso_chave', 'Chave Pública PGPii', true);


        $this->addSubmit('Cadastrar');
        $this->setAttrib('class', 'form-horizontal');
    }
}
