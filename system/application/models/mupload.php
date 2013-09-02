<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class mupload extends Model
{
    function mupload()
    {
        parent::Model();
        $this->load->database();
    }

    function getMaxIndex()
    {
        $query = "select count(*)as jumlah from barang_foto";
        $data = $this->db->query($query);
        return $data->result();
    }

    function getKategori(){
        $query = "select kategori_id, kategori_nama, kategori_desc, kategori_alamat from kategori";
        $data = $this->db->query($query);
        return $data->result();
    }

    function addBarang(){
        $nama = $this->input->post('nama');
        $kategori = $this->input->post('kategori');
        $deskripsi = $this->input->post('deskripsi');
        $jumlah = $this->input->post('jumlah');
        $harga = $this->input->post('harga');
        $member_id = $this->session->userdata('id');
        $query="insert into barang values(null,".$this->db->escape($kategori).", $member_id, ".$this->db->escape($nama).",".$this->db->escape($deskripsi).", '0', NOW(), '0', '0', ".$this->db->escape($harga).", ".$this->db->escape($jumlah).")";
        $this->db->query($query);
        $query="select barang_id from barang where barang_nama=".$this->db->escape($nama)." and kategori_id=".$this->db->escape($kategori)." and member_id=$member_id and barang_desc=".$this->db->escape($deskripsi)." and barang_harga=".$this->db->escape($harga)." and barang_stock=".$this->db->escape($jumlah);
        $data =$this->db->query($query);
        return $data->result();
    }

    function addFotoBarang($max, $extension, $barang_id){
        $id=$this->session->userdata('id');
        $source=  "/upload/kop".$max.$extension;
        $query = "insert into barang_foto values(null,".$this->db->escape($barang_id).",".$this->db->escape($source).")";
        $this->db->query($query);
    }
}
?>