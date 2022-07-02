<?php
class Beli_model extends CI_Model{
    // buat property atau variabel
    public $id, $tanggal, $jumlah, $users_id, $produk_id;

    public function getAll(){
        // Menampilkan seluruh data yang ada di table mobil menggunakan query builder
        $query = $this->db->get('pesanan');
        return $query->result();
    }
    public function getById($id){
        // menampilkan 
        $query = $this->db->get_where('pesanan', ['id' => $id]);
        return $query->row();
    }
    // Baru
    public function simpan($data){
        $sql = "INSERT INTO pesanan (tanggal,jumlah,users_id,produk_id) VALUE (?,?,?,?)";

        $this->db->query($sql, $data);
        // $insert_id = $this->db->insert_id();
        // return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE pesanan SET tanggal=?, jumlah=?, users_id=?, produk_id=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data pesanan
        $sql = "DELETE FROM pesanan WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>