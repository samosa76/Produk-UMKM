<?php
class User extends CI_Controller{
    // membuat method index
// METHOD user
    public function index(){
        // akses model user
        $this->load->model('user_model');
        $user = $this->user_model->getAll();
        $data['user'] = $user;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('user/index', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');

    }

    public function changeRole(){
        $this->load->model('user_model', 'user'); 
        $_role = $this->input->post('role');
        $_iduser = $this->input->post('iduser');

        $data_user['role'] = $_role;
        $data_user['iduser'] = $_iduser;

        $this->user->update($data_user);
        redirect('user','refresh');
    }
    public function edit($id){
        // akses model user
        $this->load->model('user_model','user');
        $obj_user = $this->user->findById($id);
        $data['obj_user'] = $obj_user;
        $this->load->view('layouts/header');
        $this->load->view('user/edit', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('user_model','user');
        // Mengecek data user berdasarkan id
        $data_user['id'] = $id;
        $this->user->delete($data_user);
        redirect('user','refresh');
    }
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('logged_in')){
            redirect('/login');
        }
    }
}
?>