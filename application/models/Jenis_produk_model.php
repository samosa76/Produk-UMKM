<?php
class Jenis_produk_model extends CI_Model{
    // buat property atau variabel
    public $id, $nama;

    public function getAll(){
        // Menampilkan seluruh data yang ada di table mobil menggunakan query builder
        $query = $this->db->get('jenis_produk');
        return $query->result();
    }
    public function getById($id){
        // menampilkan 
        $query = $this->db->get_where('jenis_produk', ['id' => $id]);
        return $query->row();
    }
    // Baru
    public function simpan($data){
        $sql = "INSERT INTO jenis_produk (nama) VALUE (?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE jenis_produk SET nama=?  WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data jenis_produk
        $sql = "DELETE FROM jenis_produk WHERE id=?";
        $this->db->query($sql, $data); 
    }
}
?>