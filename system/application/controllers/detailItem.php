<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class DetailItem extends Controller
{
    function DetailItem()
    {
        parent::Controller();
        $this->load->library(array('session','cart'));
        $this->load->helper(array('form', 'url'));
    }

    function index()
    {

        $tes=$this->session->userdata('type');
        if($tes=="member")
            {
                $this->load->model('mprofil');
                $hasil= $this->mprofil->getInfo();
                $id=0;
                $id = $this->session->userdata('id');
                if($id!=0) $data['info'] = $hasil;
                else $data['info'] = "kosong";
            }

        $this->load->model('mBarang');
        $data['barang']=$this->mBarang->getDetailBarang($this->uri->segment(3,0));
        $this->load->view('barang_detail', $data);
    }

    function addToCart(){
        if($this->input->post('barang_id')!=0){
            
            $data = array(
                       'id'      => $this->input->post('barang_id'),
                       'qty'     => $this->input->post('barang_jumlah'),
                       'price'   => $this->input->post('barang_harga'),
                       'name'    => $this->input->post('barang_nama')
                    );
            $this->cart->insert($data);
            //add to cart berhasil
            //redirect('');
            redirect('detailItem/index/'.$this->input->post('barang_id'));
        }
        else{
            //gagal add to cart
            //redirect('');
        }
    }
}
?>
