<?php

class EmailValidator extends CI_Object{

    public function set_rules(){
        $this->form_validation->set_rules('name', 'name', 'required|max_length[40]|min_length[2]');
        $this->form_validation->set_rules('email_from', 'email_from', 'valid_email|required|max_length[40]|min_length[7]');
        $this->form_validation->set_rules('email', 'email', 'valid_email|required|max_length[40]|min_length[7]');
        $this->form_validation->set_rules('subject', 'subject', 'required|max_length[60]');
        $this->form_validation->set_rules('body', 'body', 'required|max_length[300]');
    }

    /**
     * Cria um array com as informações do formulário
     * @return array 
     */
    public function getData(){
        $data['name'] = $this->input->post('name');
        $data['email_from'] = $this->input->post('email_from');
        $data['email'] = $this->input->post('email');
        $data['subject'] = $this->input->post('subject');
        $data['body'] = $this->input->post('body');

        return $data;
    } 
}