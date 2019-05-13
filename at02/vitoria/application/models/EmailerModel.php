<?php
defined('BASEPATH') OR exit ('No drect script access allowed');
include APPPATH.'libraries/EmailValidator.php';
include APPPATH.'libraries/SendGrid.php';


class EmailerModel extends CI_Model{

    /**
     * Executa os métodos de validação do formulário,
     * envia o email e redireciona para a 
     * pagina de enviado caso obtver sucesso 
     */
    public function envia_email(){
        
        if(sizeof($_POST) == 0) return;

        $dados = new EmailValidator();
        $dados->set_rules();

        if($this->form_validation->run()){

        $v = $dados->getData();
        $sg = new SendGrid();
        $sg->envia($v);
        
        redirect('emailer/enviado', 'refresh');

        }
    }
}