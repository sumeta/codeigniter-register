<?php

class Training extends Main_Controller {

    public function index() {

       $this->load->view('training');
       $this->load->view('include/footer');
    }

    public function add() {
        $this->db->set("tr_fname", $this->input->post("tr_fname"));
        $this->db->set("tr_lname", $this->input->post("tr_lname"));
        $this->db->set("tr_nname", $this->input->post("tr_nname"));
        $this->db->set("tr_address", $this->input->post("tr_address"));
        $this->db->set("tr_tel", $this->input->post("tr_tel"));
        $this->db->set("tr_email", $this->input->post("tr_email"));
        $this->db->set("tr_facebook", $this->input->post("tr_facebook"));
        // เพิ่มมาทีหลัง
        $this->db->set("tr_birthday", $this->input->post("tr_birthday"));
        $this->db->set("tr_agency", $this->input->post("tr_agency"));
        $this->db->set("tr_position", $this->input->post("tr_position"));
        $this->db->set("tr_fax", $this->input->post("tr_fax"));
        $this->db->set("tr_line", $this->input->post("tr_line"));

        // อัฟภาพ 
        if ($_FILES['tr_img']['name']) {
            $config['upload_path'] = 'assets/pic';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['overwrite'] = true;
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);  // โหลด ไลบารี
            $extension = end(explode('.', $_FILES['tr_img']['name']));
            $imgname = md5($_FILES['tr_img']["name"]) . time() . '.' . $extension;  // ดัตให้แหลือแต่นามสกุล
            $config['file_name'] = $imgname;
            $this->upload->initialize($config);
            if(! $this->upload->do_upload('tr_img')){
              echo $this->upload->display_errors();
          }
          $this->db->set("tr_img", $imgname);
      }
      $this->db->insert('training');
      redirect('');
  }

}
