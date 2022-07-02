<?php
class Mobil extends CI_Controller{
    // membuat method index
// METHOD Mobil
    public function index(){
        // akses model mobil
        $this->load->model('mobil_model');
        $mobil = $this->mobil_model->getAll();
        $data['mobil'] = $mobil;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('mobil/index', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');

    }
    public function detail($id){
        // akses model mobil
        $this->load->model('mobil_model');
        $mobil = $this->mobil_model->getById($id);
        $data['mobil'] = $mobil;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('mobil/detail', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('mobil/form');
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model mobil
        $this->load->model('mobil_model', 'mobil'); //1
        $_plat = $this->input->post('nopol');
        $_warna = $this->input->post('warna');
        $_biaya_sewa = $this->input->post('biaya_sewa');
        $_deskripsi = $this->input->post('deskripsi');
        $_cc = $this->input->post('cc');
        $_tahun = $this->input->post('tahun');
        $_merk_id = $this->input->post('merk_id');
        $_foto = $this->input->post('foto');

       $data_mobil['nopol'] = $_plat; //2
       $data_mobil['warna'] = $_warna;
       $data_mobil['biaya_sewa'] = $_biaya_sewa;
       $data_mobil['deskripsi'] = $_deskripsi;
       $data_mobil['cc'] = $_cc;
       $data_mobil['tahun'] = $_tahun;
       $data_mobil['merk_id'] = $_merk_id;
       $data_mobil['foto'] = $_foto;

       if((!empty($_idedit))){  //update
           $data_mobil['id'] = $_idedit;
           $this->mobil->update($data_mobil);
       }else{
        //    data baru
        $this->mobil->simpan($data_mobil);
       }
       redirect('mobil','refresh');
    }
    public function edit($id){
        // akses model mobil
        $this->load->model('mobil_model','mobil');
        $obj_mobil = $this->mobil->getById($id);
        $data['obj_mobil'] = $obj_mobil;
        $this->load->view('layouts/header');
        $this->load->view('mobil/edit', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('mobil_model','mobil');
        // Mengecek data mobil berdasarkan id
        $data_mobil['id'] = $id;
        $this->mobil->delete($data_mobil);
        redirect('mobil','refresh');
    }
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('logged_in')){
            redirect('/login');
        }
    }

    public function upload(){
        $_idmobil = $this->input->post("idmobil");
        // akses obj model
        $this->load->model('mobil_model','mobil');
        $mobil = $this->mobil->getById($_idmobil);
        $data['mobil'] = $mobil;

        $config ['upload_path'] = './uploads/photos';
        $config ['allowed_types'] = 'jpg|png';
        $config ['max_size'] = 2894;
        $config ['max_width'] = 2894;
        $config ['max_height'] = 2894;
        $config ['file_name'] = $mobil->id;

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
        $this->load->view('mobil/detail', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
}
?>