<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Cart extends Controller
{
    function Cart()
    {
        parent::Controller();
        $this->load->library(array('session', 'cart'));
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    function index(){
        if($this->cart->total_items()>0){
            $this->load->view('cart');
        }
        else {
            redirect('jualbeli');
        }
    }

    function buy(){
        if($this->input->post('beli')=="Batalkan Pembelian"){
            $this->cart->destroy();
            redirect('jualbeli', 'refresh');
        }
        else if($this->input->post('beli')=="Beli"){
            $this->load->model('mCart');
            $data['info'] = $this->mCart->make_nota();
            //buat halaman notifikasi nota
            $this->cart->destroy();
        	$this->load->view('cart-info',$data);
        }
    }

    function history(){
        $id = $this->input->post('id');
        if($id=="")redirect('home');
        else {
            $this->load->model('mCart');
            $data['pembelian']=$this->mCart->getPembelian();
            $data['detail']=$this->mCart->getDetailPembelian();
            $this->load->view('cart-history', $data);
        }
    }
}