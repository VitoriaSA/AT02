<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emailer extends CI_Controller {

	public function index(){

		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('emailer/pagina_inicial');
		$this->load->view('common/footer');
	}

	public function declare_se(){

		$this->load->view('common/header');
		$this->load->view('common/navbar');

		$this->load->model('EmailerModel', 'emailer');
        $this->emailer->envia_email();

		$this->load->view('emailer/emailer');
		$this->load->view('common/rodape');
		$this->load->view('common/footer');
	}

	public function sendgrid(){

		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('emailer/sendgrid');
		$this->load->view('common/rodape');
		$this->load->view('common/footer');
	}

	public function enviado(){

		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('emailer/enviado');
		$this->load->view('common/rodape');
		$this->load->view('common/footer');
	}
}
