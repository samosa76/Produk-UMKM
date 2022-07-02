<?php
class Beli extends CI_Controller{
    // membuat method index
// METHOD beli
    public function index(){
        // akses model beli
        $this->load->model('beli_model');
        $beli = $this->beli_model->getAll();
        $data['beli'] = $beli;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('beli/index', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');

    }
    public function detail($id){
        // akses model beli
        $this->load->model('beli_model');
        $beli = $this->beli_model->getById($id);
        $data['beli'] = $beli;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('beli/detail', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('beli/form');
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model beli
        $this->load->model('beli_model', 'beli'); 
        $_tanggal = $this->input->post('tanggal');
        $_jumlah = $this->input->post('jumlah');
        $_users_id = $this->input->post('users_id');
        $_produk_id = $this->input->post('produk_id');
        $_idedit = $this->input->post('idedit');
        
        
        $data_beli['tanggal'] = $_tanggal; // ? 1
        $data_beli['jumlah'] = $_jumlah;// ? 2
        $data_beli['users_id'] = $_users_id;// ? 3
        $data_beli['produk_id'] = $_produk_id; // ? 
        
        
        if((!empty($_idedit))){  //update
            $data_beli['id'] = $_idedit; // ? 6
            $this->beli->update($data_beli);
        }else{
            //data baru
            $this->beli->simpan($data_beli);
        }
       redirect('beli','refresh');
    }
    public function edit($id){
        // akses model beli
        $this->load->model('beli_model','beli');
        $obj_beli = $this->beli->getById($id);
        $data['obj_beli'] = $obj_beli;
        $this->load->view('layouts/header');
        $this->load->view('beli/edit', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('beli_model','beli');
        // Mengecek data beli berdasarkan id
        $data_beli['id'] = $id;
        $this->beli->delete($data_beli);
        redirect('beli','refresh');
    }
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('logged_in')){
            //redirect('/login');
        }
    }

    public function upload(){
        $_idbeli = $this->input->post("idbeli");
        // akses obj model
        $this->load->model('beli_model','beli');
        $beli = $this->beli->getById($_idbeli);
        $data['beli'] = $beli;

        $config ['upload_path'] = './uploads/photos';
        $config ['allowed_types'] = 'jpg|png';
        $config ['max_size'] = 2894;
        $config ['max_width'] = 2894;
        $config ['max_height'] = 2894;
        $config ['file_name'] = $beli->id;

        // menginisialisasi file upload
        $this->load->library('upload',$config);

        if(!$this->upload->do_upload('foto')){
            $data['error'] = $this->upload->display_errors();
        }else{
            $data['upload_data'] = $this->upload->data();
            $data['error'] = 'Data Sukses';
        }

        // render atau kirim ke view
        $this->load->view('layouts/header'); 
        $this->load->view('beli/detail', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
}
?>