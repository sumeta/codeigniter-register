<?php

class Training extends Admin_Controller {

    public function index() {
        $query = $this->db->get('training');
        $data['rs'] = $query->result();
        $this->load->view('admin/training/index', $data);
    }

}
