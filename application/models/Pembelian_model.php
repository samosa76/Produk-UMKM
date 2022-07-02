<?php
class Pembelian_model extends CI_Model{
    // buat property atau variabel
    public $id, $tanggal, $jumlah, $harga, $produk_id, $suplier_id;

    public function getAll(){
        // Menampilkan seluruh data yang ada di table mobil menggunakan query builder
        $query = $this->db->get('pembelian');
        return $query->result();
    }
    public function getById($id){
        // menampilkan 
        $query = $this->db->get_where('pembelian', ['id' => $id]);
        return $query->row();
    }
    // Baru
    public function simpan($data){
        $sql = "INSERT INTO pembelian (tanggal,jumlah,harga,produk_id,suplier_id) VALUE (?,?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE pembelian SET tanggal=?, jumlah=?, harga=?, produk_id=?, suplier_id=?  WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data pembelian
        $sql = "DELETE FROM pembelian WHERE id=?";
        $this->db->query($sql, $data); 
    }
}
?>