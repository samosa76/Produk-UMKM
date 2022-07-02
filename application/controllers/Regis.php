<?php
class Regis extends CI_Controller{
    // membuat method index
// METHOD user
    public function index(){
        // akses model user
        // $this->load->model('user_model');
        // $user = $this->user_model->getAll();
        // $data['user'] = $user;
        // render data dan kirim data ke dalam view
        // $this->load->view('layouts/header'); 
        $this->load->view('regis/index');
        // $this->load->view('layouts/sidebar');
        // $this->load->view('layouts/footer');

    }
    public function otentikasi(){
        $this->load->model("user_model","user");
        $_username = $this->input->post('username'); 
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_idedit = $this->input->post('idedit');

        $data_regis['username'] = $_username; // ? 1
        $data_regis['password'] = $_password; // ? 2
        $data_regis['email'] = $_email; // ? 3

        $this->user->simpan($data_regis);
        redirect('login');

        

        // $row = $this->user->login($_username,$_password);
        // if(isset($row)){// jika user terdaftar di database
        //     $this->session->set_userdata('USERNAME',$row->username);
        //     $this->session->set_userdata('ROLE',$row->role);
        //     $this->session->set_userdata('USER',$row);
            
        //     redirect(base_url().'index.php/produk');
        // }else{// jika user tidak (username password salah)
        //     redirect(base_url().'index.php/regis?status=f'); 
        // }

    }
}
?>