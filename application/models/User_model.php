<?php
// application/models/User_model.php

class User_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function check_login($username, $password) {
        // Perform a database query to check if the user exists with the given username and password
        $query = $this->db->get_where('users', array('username' => $username, 'pass' => $password));

        // Check if a user was found
        if ($query->num_rows() == 1) {
            // User exists, return user data or TRUE as needed
            return $query->row_array(); // You can return more user data if needed
        } else {
            // User not found
            return FALSE;
        }
    }

    public function get_users() {      

        $query = $this->db->query("SELECT * FROM users ORDER BY id DESC");
        //$query = $this->db->get('users');
        return $query->result();
    }

    public function get_user($id) {
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row();
    }

    public function create_user($data) {
        return $this->db->insert('users', $data);
    }

    public function update_user($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    public function delete_user($id) {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }
}

?>