<?php
class Produk extends CI_Controller{
    // membuat method index
// METHOD Produk
    public function index(){
        // akses model Produk
        $this->load->model('produk_model');
        $produk = $this->produk_model->getAll();
        $data['produk'] = $produk;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('produk/index', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');

    }
    public function detail($id){
        // akses model produk
        $this->load->model('produk_model');
        $produk = $this->produk_model->getById($id);
        $data['produk'] = $produk;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('produk/detail', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('produk/form');
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model produk
        $this->load->model('produk_model', 'produk'); 
        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama');
        $_stok = $this->input->post('stok');
        $_harga_beli = $this->input->post('harga_beli');
        $_harga_jual = $this->input->post('harga_jual');
        $_foto = $this->input->post('foto');
        $_jenis_id = $this->input->post('jenis_id');
        $_deskripsi = $this->input->post('deskripsi');
        $_idedit = $this->input->post('idedit');

       $data_produk['kode'] = $_kode; 
       $data_produk['nama'] = $_nama;
       $data_produk['stok'] = $_stok;
       $data_produk['harga_beli'] = $_harga_beli;
       $data_produk['harga_jual'] = $_harga_jual;
       $data_produk['foto'] = $_foto;
       $data_produk['jenis_id'] = $_jenis_id;
       $data_produk['deskripsi'] = $_deskripsi;

       if(isset($_idedit)){  
        //update
           $data_produk[] = $_idedit;
           $this->produk->update($data_produk);
       }else{
        //    data baru
        $this->produk->simpan($data_produk);
       }
       redirect('produk','refresh');
    }
    public function edit($id){
        // akses model produk
        $_id = $this->input->get('id');
        $this->load->model('produk_model','produk');
        $obj_produk = $this->produk->getById($id);

        $data['obj_produk'] = $obj_produk;
        $this->load->view('layouts/header');
        $this->load->view('produk/edit', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('produk_model','produk');
        // Mengecek data produk berdasarkan id
        $data_produk['id'] = $id;
        $this->produk->delete($data_produk);
        redirect('produk','refresh');
    }
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('logged_in')){
            redirect('/login');
        }
    }

    public function upload(){
        $_idproduk = $this->input->post("idproduk");
        // akses obj model
        $this->load->model('produk_model','produk');
        $mobil = $this->produk->getById($_idproduk);
        $data['produk'] = $produk;

        $config ['upload_path'] = './uploads/photos';
        $config ['allowed_types'] = 'jpg|png';
        $config ['max_size'] = 2894;
        $config ['max_width'] = 2894;
        $config ['max_height'] = 2894;
        $config ['file_name'] = $produk->id;

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
        $this->load->view('produk/detail', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
}
?>