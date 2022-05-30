<?php
class Matakuliah_model extends CI_Model{
    public $id, $nama, $sks, $kode ;

    public function getA(){
        // menampilkan ssemua data yang ada di tabel dosen menggunakan query builder
        $query = $this->db->get('matakuliah');
        return $query->result();
    }
    public function getById($id){
        // menampilakan data berdasarkan id
        $query = $this->db->get_where('matakuliah', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql= "INSERT INTO matakuliah (nama,sks,kode) VALUES (?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE matakuliah SET nama=?,sks=?,kode=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data maatakuliah
        $sql = "DELETE FROM matakuliah WHERE id=?";
        $this->db->query($sql,$data);
    }
}
    
?>