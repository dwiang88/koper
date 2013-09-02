<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class mhome extends Model
{
    function mhome()
    {
        parent::Model();
        $this->load->database();
    }

    function getNewest(){
        $query = "select b.barang_id, k.kategori_nama, b.barang_nama, b.barang_harga, bf.bf_alamat from barang b, kategori k, barang_foto bf where b.kategori_id=k.kategori_id and b.barang_id=bf.barang_id order by b.barang_add desc limit 0, 4";
        $data = $this->db->query($query);
        return $data->result();
    }
}
?>