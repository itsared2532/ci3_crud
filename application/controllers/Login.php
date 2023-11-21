<?php
defined('BASEPATH') or exit('No direct script access allowed');
    class Login extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('user_model');
            $this->load->library('session');
        }

        public function index() {
            // $this->load->model('user_model');
            $this->load->view('login/index');
        }

        public function process(){

            if($this->input->post()){

                $username = $this->input->post('username');
                $password = $this->input->post('password');

                // echo $username;
                // echo $password;
                // Check if the user exists with the given credentials
                $user_data = $this->user_model->check_login($username, $password);


                if ($user_data) {
                    // Login successful, set session data or perform other actions
                    $this->session->set_userdata('logged_in', TRUE);
                    $this->session->set_userdata('user_data', $user_data);
        
                    //printr($data);
                    $data['title'] = 'Welcome to CodeIgniter!';

                    $this->load->view('common/header', $data);
                    $this->load->view('welcome_message');
                    $this->load->view('common/footer');
                } else {
                    // Login failed, redirect back to the login page with an error message
                    $this->session->set_flashdata('error_message', 'Invalid username or password');
                    redirect('login/index');
                }

                // $data = array(
                //     'username' => $this->input->post('username'),
                //     'password' => $this->input->post('password')
                // );

                // //printr($data);
                // $data['title'] = 'Welcome to CodeIgniter!';

                // // $this->load->model('user_model');
                // //$data['users'] = $this->user_model->get_users();
                
                // //redirect('users/index');


                // $this->load->view('common/header', $data);
                // $this->load->view('welcome_message');
                // $this->load->view('common/footer');
            
            }
           
        }
    }

    
?>
