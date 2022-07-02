<?php
class Jenis_produk extends CI_Controller{
    // membuat method index
// METHOD jenis_produk
    public function index(){
        // akses model jenis_produk
        $this->load->model('jenis_produk_model');
        $jenis_produk = $this->jenis_produk_model->getAll();
        $data['jenis_produk'] = $jenis_produk;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('jenis_produk/index', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');

    }
    public function detail($id){
        // akses model jenis_produk
        $this->load->model('jenis_produk_model');
        $jenis_produk = $this->jenis_produk_model->getById($id);
        $data['jenis_produk'] = $jenis_produk;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('jenis_produk/detail', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('jenis_produk/form');
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model jenis_produk
        $this->load->model('jenis_produk_model', 'jenis_produk'); 
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit');
        
        
        $data_jenis_produk['nama'] = $_nama; // ? 1
        
        
        if((!empty($_idedit))){  //update
            $data_jenis_produk['id'] = $_idedit; // ? 6
            $this->jenis_produk->update($data_jenis_produk);
        }else{
            //data baru
            $this->jenis_produk->simpan($data_jenis_produk);
        }
       redirect('jenis_produk','refresh');
    }
    public function edit($id){
        // akses model jenis_produk
        $this->load->model('jenis_produk_model','jenis_produk');
        $obj_jenis_produk = $this->jenis_produk->getById($id);
        $data['obj_jenis_produk'] = $obj_jenis_produk;
        $this->load->view('layouts/header');
        $this->load->view('jenis_produk/edit', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('jenis_produk_model','jenis_produk');
        // Mengecek data jenis_produk berdasarkan id
        $data_jenis_produk['id'] = $id;
        $this->jenis_produk->delete($data_jenis_produk);
        redirect('jenis_produk','refresh');
    }
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('logged_in')){
            redirect('/login');
        }
    }

    public function upload(){
        $_idjenis_produk = $this->input->post("idjenis_produk");
        // akses obj model
        $this->load->model('jenis_produk_model','jenis_produk');
        $jenis_produk = $this->jenis_produk->getById($_idjenis_produk);
        $data['jenis_produk'] = $jenis_produk;

        $config ['upload_path'] = './uploads/photos';
        $config ['allowed_types'] = 'jpg|png';
        $config ['max_size'] = 2894;
        $config ['max_width'] = 2894;
        $config ['max_height'] = 2894;
        $config ['file_name'] = $jenis_produk->id;

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
        $this->load->view('jenis_produk/detail', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
}
?>