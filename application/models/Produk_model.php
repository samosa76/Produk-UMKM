<?php
class Produk_model extends CI_Model{
    // buat property atau variabel
    public $id, $kode, $nama, $stok, $harga_beli, $harga_jual, $foto, $jenis_id, $deskripsi;

    public function getAll(){
        // Menampilkan seluruh data yang ada di table mobil menggunakan query builder
        $query = $this->db->get('produk');
        return $query->result();
    }
    public function getById($id){
        // menampilkan 
        $query = $this->db->get_where('produk', ['id' => $id]);
        return $query->row();
    }
    // Baru
    public function simpan($data){
        $sql = "INSERT INTO produk (kode,nama,stok,harga_beli,harga_jual,foto,jenis_id,deskripsi) VALUE (?,?,?,?,?,?,?,?)";

        $this->db->query($sql, $data);
        // $insert_id = $this->db->insert_id();
        // return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE produk SET kode=?, nama=?, stok=?, harga_beli=?, harga_jual=?, foto=?, jenis_id=?, deskripsi=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data Produk
        $sql = "DELETE FROM produk WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>