<?php
class Admin extends CI_Controller{
   public function index(){
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       $data ['judul']= 'Halaman Dashboard';
       $this->load->view('admin/header', $data);
       $this->load->view('admin/dashboard');
       $this->load->view('admin/footer');
   }
}


?>