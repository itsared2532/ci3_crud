<?php
defined('BASEPATH') or exit('No direct script access allowed');
    class Login extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('user_model');
        }

        public function index() {
            // $this->load->model('user_model');
            
            $this->load->view('login/index');
        }

        public function process(){

            if($this->input->post()){
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password')
                );

                //printr($data);
                $data['title'] = 'Welcome to CodeIgniter!';

                // $this->load->model('user_model');
                //$data['users'] = $this->user_model->get_users();
                
                //redirect('users/index');


                $this->load->view('common/header', $data);
                $this->load->view('welcome_message');
                $this->load->view('common/footer');
            
            }
           
        }
    }

    
?>
