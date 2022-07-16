<?php
class Blog extends CI_Controller{
    public function index(){
        // $this->load->view("layouts/header", $data);
        // $this->load->view("layouts/sidebar", $data);
        $this->load->view("blog/index");
        // $this->load->view("layouts/footer", $data);
    }
    public function detail($id){
        $_id = $this->input->get('id');
        $this->load->model('produk_model','produk');
        $obj_produk = $this->produk->getById($id);

        $data['obj_produk'] = $obj_produk;

        $this->load->view("blog/add", $data);
    }

    public function add(){
        if(!$this->session->userdata('logged_in')){
            redirect('/login');
        } else{
            $this->load->model('beli_model','beli');
            $_qty = $this->input->post('qty');
            $_price = $this->input->post('nama');
            $_id_produk = $this->input->post('id_produk');

            $todaydate = date("Y-m-d");
            $_date = date('Y-m-d', strtotime($todaydate));

            $data_beli[] = $_date;// ? 4
            $data_beli[] = $_qty; // ? 1
            $data_beli[] = $this->session->userdata('ID');// ? 2
            $data_beli[] = $_id_produk;// ? 3
            

            $this->beli->simpan($data_beli);
            $this->load->view('blog/berhasil');
        }
    }
    
}
?>