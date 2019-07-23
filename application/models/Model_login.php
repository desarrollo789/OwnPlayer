<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {    
    public function __construct()
    {
        $this->load->database('a-multimediaplayer');       
        //Do your magic here
    }

    public function get_users($user = FALSE, $password = FALSE)
    {
        $this->db->order_by('id', 'ASC');
        if ($user == FALSE && $password == FALSE)
        {           
            $query = $this->db->get('user_client');                        
            return $query->result_array();
        }
        $user = $this->input->post('user');
        $password = $this->input->post('password');
        $query = $this->db->get_where('user_client', array('user' => $user, 'password' => $password));
        return $query->row_array();
    }

}

/* End of file ModelName.php */

?>