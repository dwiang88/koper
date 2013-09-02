<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Home extends Controller
{
    function Home()
    {
        parent::Controller();
        $this->load->library(array('session','cart', 'pagination', 'form_validation', 'upload'));
        $this->load->helper(array('form', 'url'));
    }

    function index()
    {
        $this->load->model('mhome');
        $this->load->model('mupload');
        $data['kategori'] = $this->mupload->getKategori();
        $data['new'] = $this->mhome->getNewest();
        $this->load->view('index', $data);
    }
}