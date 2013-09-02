<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class mUnlike extends Model
{
    function mUnlike()
    {
        parent::Model();
        $this->load->database();
    }

    function getMaxUnlike($barang_id){
        $query="select barang_unlike from barang where barang_id=".$this->db->escape($barang_id);
        $data = $this->db->query($query);
        $hasil = $data->result();
        $jumlah = 0;
        foreach ($hasil as $row){
            $jumlah = $row->barang_unlike;
        }
        return $jumlah;
    }

    function addUnlike($barang_id, $jumlah){

        $jumlah++;
        $query="update barang set barang_unlike= $jumlah where barang_id=".$this->db->escape($barang_id);
        $data = $this->db->query($query);
        return $jumlah;
    }
}