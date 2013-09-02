<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class mCart extends Model
{
    function mCart()
    {
        parent::Model();
        $this->load->database();
    }

    function make_nota(){
        $query="select max(pembelian_id)as jumlah from pembelian";
        $data=$this->db->query($query);
        $max=1;
        $id_pembeli = $this->input->post('id_pembayar');
        foreach($data->result() as $row){
            if($row->jumlah !=null){
                $max=$row->jumlah;
                $max++;
            }
        }

        $total = $this->input->post('total');
        $query="insert into pembelian values($max, $max, NOW(), $total, 'Belum Dibayar',".$this->db->escape($id_pembeli).")";
        $this->db->query($query);

        foreach($this->cart->contents() as $row){
            $query = "insert into detail_pembelian values(null,".$this->db->escape($row['id']).", '$max', ".$this->db->escape($row['qty']).", ".$this->db->escape($row['price']).")";
            $this->db->query($query);
        }

        return $max;
    }

    function make_detail($max, $id, $qty, $price){
        $query = "insert into detail_pembelian values(null,".$this->db->escape($id).", '$max', ".$this->db->escape($qty).", ".$this->db->escape($price).")";
        $this->db->query($query);
    }

    function getPembelian(){
        $query = "select pembelian_pin, pembelian_tanggal, pembelian_harga, pembelian_status from pembelian where pembelian_id=".$this->db->escape($this->input->post('id'));
        $hasil=$this->db->query($query);
        return $hasil->result();
    }

    function getDetailPembelian(){
        $query = "select  b.barang_id, b.barang_nama, dk.dk_jumlah, dk.dk_harga from barang b, detail_pembelian dk where dk.barang_id = b.barang_id and dk.pembelian_id=".$this->db->escape($this->input->post('id'));
        $hasil=$this->db->query($query);
        return $hasil->result();
    }
}
?>