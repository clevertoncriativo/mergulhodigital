<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	
	
    function __construct(){
        parent::__construct();

        $this->load->library('form_validation');

        $this->context = array(
            'title' =>  "Mergulho Digital",
            'route' => ''
        );
    }

    function response($data){          
        $this
        ->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));
    }

    public function index()
	{
		$this->context['route'] = 'home';

        $this->load->view('home', $this->context);
	}

    public function sendEmail(){
        
        $context = array();
		
        $this->load->library('email');        

        $this->form_validation->set_rules('Name','Name','trim|required', array('required' => ''));
        $this->form_validation->set_rules('Email','Email','trim|required|valid_email', array('required' => '', 'valid_email' => 'Email inválido'));
        $this->form_validation->set_rules('Whatsapp','Whatsapp','trim|required', array('required' => ''));
        $this->form_validation->set_rules('Message','Message','trim|required', array('required' => ''));
            
        if($this->form_validation->run() == false){                
            
            $errors = $this->form_validation->error_array();            
            $context['success'] = false;
            $context['errors'] = $errors;
        
        }else{

            $name= $this->input->post(NULL,TRUE)['Name'];
            $email= $this->input->post(NULL,TRUE)['Email'];
            $whatsapp= $this->input->post(NULL,TRUE)['Whatsapp'];
            $message= $this->input->post(NULL,TRUE)['Message'];

            try{

                $config['charset'] = "utf-8";
                $config['mailtype'] = "html";
                $config['newline'] = "\r\n";

                $this->email->initialize($config);

                $this->email->from('comercial@agenciamergulhodigital.com.br', $name);
                $this->email->to('comercial@agenciamergulhodigital.com.br');
                $this->email->message('Whatsapp: ' . $whatsapp . '<br> Email: ' . $email . '<br> Mensagem: ' . $message);
                $this->email->subject('Enviado do formulário de contato');

                if ($this->email->send()){
                   $context['message'] = 'Mensagem enviada!! Em breve entraremos em contato com você.';
                   $context['success'] = true;
                }
                else{
                   $context['message'] = 'Não foi possível enviar a sua mensagem. Aguarde alguns momentos e tente novamente.';
                   $context['success'] = false;
                }
    
            }catch(Exception $e){
                $context['success'] = false;
                $context['message'] = $e->getMessage();		
            }
                
        }

        $this->response($context);

    }
}
