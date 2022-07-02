<?php 
 class User_model extends CI_Model{

     private $table = "users";
     
     public function getAll(){
        
         $query = $this->db->get($this->table);
         return $query->result();
     }

     public function findById($id){
         $this->db->where('id',$id);
         $query = $this->db->get($this->table);
         return $query->row();
     }

     public function login($uname,$pass){
         $sql = "SELECT * FROM users WHERE username=?
              and password=MD5(?)";
         $data = [$uname,$pass];
         $query = $this->db->query($sql, $data);
         return $query->row();
     }

     public function simpan($data){
        $sql = "INSERT INTO users (username,password,email) VALUE (?,MD5(?),?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->findById($insert_id);
    }

}
?>