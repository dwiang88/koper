<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class mBarang extends Model
{
    function mBarang()
    {
        parent::Model();
        $this->load->database();
    }

    function getBarangList($max_item_per_page, $offset, $kategori)
    {
        $query="kosong";
        if($kategori=="")$query = "SELECT b.barang_id, b.barang_nama, substr(b.barang_desc,1, 150)barang_desc, k.kategori_nama, bf.bf_alamat,b.barang_harga, b.barang_add, b.barang_like, b.barang_unlike, b.barang_stock FROM (select distinct(barang_id), bf_alamat from barang_foto)bf,barang b, kategori k where k.kategori_id=b.kategori_id and b.barang_stock>0 and b.barang_id=bf.barang_id order by barang_add desc LIMIT $offset , $max_item_per_page";
        else $query = "SELECT b.barang_id, b.barang_nama, substr(b.barang_desc,1, 150)barang_desc, k.kategori_nama, bf.bf_alamat,b.barang_harga, b.barang_add, b.barang_like, b.barang_unlike, b.barang_stock FROM (select distinct(barang_id), bf_alamat from barang_foto)bf,barang b, kategori k where k.kategori_id=b.kategori_id and b.barang_stock>0 and b.barang_id=bf.barang_id and k.kategori_nama=".$this->db->escape($kategori)." order by barang_add desc LIMIT $offset , $max_item_per_page";
        return $this->db->query($query);
    }

    function getMaxBarang($kategori){
        $query="kosong";
        if($kategori=="")$query="select barang_id from barang";
        else $query="select b.barang_id, k.kategori_nama from barang b, kategori k where k.kategori_id=b.kategori_id and k.kategori_nama=".$this->db->escape($kategori);
        return $this->db->query($query);
    }

    function getDetailBarang($barang_id){
        $query="select b.barang_desc, b.barang_nama, b.barang_harga, b.barang_stock, b.barang_like, b.barang_unlike, bf.bf_alamat from barang b, (select distinct(barang_id)barang_id, bf_alamat from barang_foto where barang_id=".$this->db->escape($barang_id).")bf where b.barang_id=bf.barang_id and b.barang_id=".$this->db->escape($barang_id);
        $data=$this->db->query($query);
        return $data->result();
    }

    function getBarangSearch(){
        $query="kosong";
	  $search = $this->db->escape_like_str($this->input->post('search'));
        $query = "SELECT b.barang_id, b.barang_nama, substr(b.barang_desc,1, 150)barang_desc, k.kategori_nama, bf.bf_alamat,b.barang_harga, b.barang_add, b.barang_like, b.barang_unlike, b.barang_stock FROM (select distinct(barang_id), bf_alamat from barang_foto)bf,barang b, kategori k where k.kategori_id=b.kategori_id and b.barang_stock>0 and b.barang_id=bf.barang_id and b.barang_desc like '%$search%' order by barang_add desc";
        return $this->db->query($query);
    }
}
?>