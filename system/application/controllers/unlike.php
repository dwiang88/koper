<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Unlike extends Controller
{
    function Unlike()
    {
        parent::Controller();
        $this->load->library(array('session','cart'));
    }

    function index()
    {
        $unlike = $this->session->userdata('unlike');
        $this->load->model('mUnlike');
        $jumlah = $this->mUnlike->getMaxUnlike($this->uri->segment(3,0));
        if($unlike!=1){
            $this->mUnlike->addUnlike($this->uri->segment(3, 0), $jumlah);
            $this->session->set_userdata('unlike', '1');
            echo ($jumlah+1);
            exit(0);
        }
        echo $jumlah;
    }
}
?>