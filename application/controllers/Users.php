<?php
defined('BASEPATH') or exit('No direct script access allowed');
// application/controllers/Users.php

require 'vendor/autoload.php';



class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

    public function logout() {
        // Destroy the session
        $this->session->sess_destroy();

        // Redirect to the login page or any other page after logout
        redirect('login/index');
    }

    public function index() {

        // Check if the user is logged in
        if (!$this->session->userdata('logged_in')) {
            // If not logged in, redirect to the login page
            redirect('login/index');
        }

        // $this->load->model('user_model');
        $data['users'] = $this->user_model->get_users();
        
        $data['title'] = 'User List';

        $this->load->view('common/header', $data);
        $this->load->view('users/index', $data);
        $this->load->view('common/footer');
    }

    public function create() {
        // $this->load->model('user_model');      
        // $data['title'] = 'Create User';

        if($this->input->post()){
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('department', 'Department', 'required');
            $this->form_validation->set_rules('pass', 'Password', 'required');

            $data['username'] = $this->input->post('username');
                $data['email'] = $this->input->post('email');
                $data['department'] = $this->input->post('department');
                $data['pass'] = $this->input->post('pass');
            
            if ($this->form_validation->run() === FALSE) {
                // echo "error";
                //echo validation_errors();
                // $data['title'] = 'Create User';

                // $this->load->view('common/header', $data);    
                // $this->load->view('users/create');
                // $this->load->view('common/footer');
                //$this->load->view('users/create');

                // Keep the posted data
                
            }else{
                // echo "success";
                $data = array(
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'department' => $this->input->post('department'),
                    'pass' => $this->input->post('pass')
                );

                $result = $this->user_model->create_user($data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Form processed successfully.');
                } else {
                    $this->session->set_flashdata('error_message', 'Error processing form.');
                }

                redirect('users/index');
            }
            //echo "post";
        }else{
            $data['username'] = $this->input->post('');
                $data['email'] = $this->input->post('');
                $data['department'] = $this->input->post('');
                $data['pass'] = $this->input->post('');
        }

        $data['title'] = 'Create User';

        $this->load->view('common/header', $data);    
        $this->load->view('users/create', $data);
        $this->load->view('common/footer');
    }

    public function edit($id) {
        $this->load->model('user_model');
        $data['user'] = $this->user_model->get_user($id);

        if (empty($data['user'])) {
            show_404();
        }

        $data['title'] = 'Edit User';

        $this->load->view('common/header', $data);    
        $this->load->view('users/edit', $data);
        $this->load->view('common/footer');
        
    }

    public function update() {
        $this->load->model('user_model');
        $id = $this->input->post('id');

        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'department' => $this->input->post('department'),
            'pass' => $this->input->post('pass')
        );

        $result = $this->user_model->update_user($id, $data);

        if ($result) {
            $this->session->set_flashdata('success_message', 'Form processed successfully.');
        } else {
            $this->session->set_flashdata('error_message', 'Error processing form.');
        }
        redirect('users/index');
    }

    public function delete($id) {
        $this->load->model('user_model');
        $result = $this->user_model->delete_user($id);

        if ($result) {
            $this->session->set_flashdata('success_message', 'Form processed successfully.');
        } else {
            $this->session->set_flashdata('error_message', 'Error processing form.');
        }

        redirect('users/index');
    }

    // ใน Controller
    public function delete_selected() {
        // รับข้อมูลที่ถูกส่งมาจากหน้า View
        $selected_ids = $this->input->post('selected_ids');

        // ตรวจสอบว่ามีรายการที่ถูกเลือกหรือไม่
        if (!empty($selected_ids)) {
            // ลบข้อมูลที่มี id ตรงกับรายการที่ถูกเลือก

            foreach ($selected_ids as $id) {
                // ทำสิ่งที่คุณต้องการกับ $id
                $this->load->model('user_model');
                $result = $this->user_model->delete_user($id);
            }
            

            // ส่งข้อความกลับไปยังหน้า View
            echo json_encode(['status' => 'success', 'message' => 'ลบข้อมูลสำเร็จ']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'กรุณาเลือกรายการที่ต้องการลบ']);
        }
    }

    public function upload() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitUpload'])) {
            if (isset($_FILES['fileInput'])) {
                $file = $_FILES['fileInput']['tmp_name'];
                $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file);
                $worksheet = $spreadsheet->getActiveSheet();

                // วนลูปอ่านข้อมูลจากแต่ละแถวของ column A และ B (username และ email)
                foreach ($worksheet->getRowIterator() as $row) {
                    $cellIterator = $row->getCellIterator();
                    $cellIterator->setIterateOnlyExistingCells(false);

                    $rowData = array(
                        'username' => null,
                        'email' => null,
                    );

                    foreach ($cellIterator as $cell) {
                        if ($cell->getColumn() == 'A') {
                            $rowData['username'] = $cell->getValue();
                        } elseif ($cell->getColumn() == 'B') {
                            $rowData['email'] = $cell->getValue();
                        }
                    }

                    // เพิ่มข้อมูลลงในฐานข้อมูล
                    $result = $this->user_model->create_user($rowData);

                     // ตรวจสอบผลลัพธ์จากการเพิ่มข้อมูลลงในฐานข้อมูล
                     if ($result) {
                        //echo 'Data imported successfully.';
                    } else {
                        //echo 'Error importing data into the database.';
                        // หรือจัดการข้อผิดพลาดตามที่คุณต้องการ
                    }
                }

                // สามารถใส่การแจ้งเตือนหรือการทำงานอื่น ๆ ที่คุณต้องการหลังจากการทำงานทั้งหมด
                if ($result) {
                    $this->session->set_flashdata('success_message', 'Form uploading successfully.');
                } else {
                    $this->session->set_flashdata('error_message', 'Error uploading form.');
                }
                redirect('users/index');
                //echo 'Data imported successfully.';
            } else {
                echo 'No file uploaded.';
            }
        } else {
            echo 'Invalid request.';
        }
    }

    
    
}


?>
