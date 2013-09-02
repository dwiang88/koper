<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class mLike extends Model
{
    function mLike()
    {
        parent::Model();
        $this->load->database();
    }

    function getMaxLike($barang_id){
        $query="select barang_like from barang where barang_id=".$this->db->escape($barang_id);
        $data = $this->db->query($query);
        $hasil = $data->result();
        $jumlah = 0;
        foreach ($hasil as $row){
            $jumlah = $row->barang_like;
        }
        return $jumlah;
    }

    function addLike($barang_id, $jumlah){

        $jumlah++;
        $query="update barang set barang_like= $jumlah where barang_id=".$this->db->escape($barang_id);
        $data = $this->db->query($query);
        return $jumlah;
    }
}