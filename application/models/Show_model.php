<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_shows()
    {
        $query = $this->db->get('shows');
        return $query->result();
    }
}