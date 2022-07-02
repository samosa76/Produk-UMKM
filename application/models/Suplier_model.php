<?php
class Suplier_model extends CI_Model{
    // buat property atau variabel
    public $id, $nama, $kota, $kontak, $alamat, $telpon;

    public function getAll(){
        // Menampilkan seluruh data yang ada di table mobil menggunakan query builder
        $query = $this->db->get('suplier');
        return $query->result();
    }
    public function getById($id){
        // menampilkan 
        $query = $this->db->get_where('suplier', ['id' => $id]);
        return $query->row();
    }
    // Baru
    public function simpan($data){
        $sql = "INSERT INTO suplier (nama,kota,kontak,alamat,telpon) VALUE (?,?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE suplier SET nama=?, kota=?, kontak=?, alamat=?, telpon=?  WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data suplier
        $sql = "DELETE FROM suplier WHERE id=?";
        $this->db->query($sql, $data); 
    }
}
?>