<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class mprofil extends Model
{
    function mprofil()
    {
        parent::Model();
        $this->load->database();
    }

    function getInfo(){
        $id = $this->session->userdata('id');
        $query="select member_nama, member_alamat, member_desc, member_phone, member_email, member_foto from member where member_id=$id";
        $data=$this->db->query($query);
        return $data->result();
    }

    function getBarang($max, $offset){
        $id = $this->session->userdata('id');
        $query="select b.barang_id, b.barang_nama, b.barang_desc, bf.bf_alamat from barang b, (select distinct(barang_id), bf_alamat from barang_foto)bf where b.member_id=$id and bf.barang_id=b.barang_id limit $offset, $max";
        $data=$this->db->query($query);
        return $data->result();
    }
    
    function getMaxBarangMember(){
        $id = $this->session->userdata('id');
        $query="select barang_id from barang where member_id=$id";
        return $this->db->query($query);
    }
}
?>