<?php
class Pembelian extends CI_Controller{
    // membuat method index
// METHOD pembelian
    public function index(){
        // akses model pembelian
        $this->load->model('pembelian_model');
        $pembelian = $this->pembelian_model->getAll();
        $data['pembelian'] = $pembelian;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('pembelian/index', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');

    }
    public function detail($id){
        // akses model pembelian
        $this->load->model('pembelian_model');
        $pembelian = $this->pembelian_model->getById($id);
        $data['pembelian'] = $pembelian;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('pembelian/detail', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('pembelian/form');
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model pembelian
        $this->load->model('pembelian_model', 'pembelian'); 
        $_tanggal = $this->input->post('tanggal');
        $_jumlah = $this->input->post('jumlah');
        $_harga = $this->input->post('harga');
        $_produk_id = $this->input->post('produk_id');
        $_suplier_id = $this->input->post('suplier_id');
        $_idedit = $this->input->post('idedit');
        
        
        $data_pembelian['tanggal'] = $_tanggal; // ? 1
        $data_pembelian['jumlah'] = $_jumlah;// ? 2
        $data_pembelian['harga'] = $_harga;// ? 3
        $data_pembelian['produk_id'] = $_produk_id; // ? 4
        $data_pembelian['suplier_id'] = $_suplier_id; // ? 5
        
        
        if((!empty($_idedit))){  //update
            $data_pembelian['id'] = $_idedit; // ? 6
            $this->pembelian->update($data_pembelian);
        }else{
            //data baru
            $this->pembelian->simpan($data_pembelian);
        }
       redirect('pembelian','refresh');
    }
    public function edit($id){
        // akses model pembelian
        $this->load->model('pembelian_model','pembelian');
        $obj_pembelian = $this->pembelian->getById($id);
        $data['obj_pembelian'] = $obj_pembelian;
        $this->load->view('layouts/header');
        $this->load->view('pembelian/edit', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('pembelian_model','pembelian');
        // Mengecek data pembelian berdasarkan id
        $data_pembelian['id'] = $id;
        $this->pembelian->delete($data_pembelian);
        redirect('pembelian','refresh');
    }
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('logged_in')){
            redirect('/login');
        }
    }

    public function upload(){
        $_idpembelian = $this->input->post("idpembelian");
        // akses obj model
        $this->load->model('pembelian_model','pembelian');
        $pembelian = $this->pembelian->getById($_idpembelian);
        $data['pembelian'] = $pembelian;

        $config ['upload_path'] = './uploads/photos';
        $config ['allowed_types'] = 'jpg|png';
        $config ['max_size'] = 2894;
        $config ['max_width'] = 2894;
        $config ['max_height'] = 2894;
        $config ['file_name'] = $pembelian->id;

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
        $this->load->view('pembelian/detail', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
}
?>