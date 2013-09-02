<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Like extends Controller
{
    function Like()
    {
        parent::Controller();
        $this->load->library(array('session','cart'));
    }

    function index()
    {
        $like = $this->session->userdata('like');
        $this->load->model('mLike');
        $jumlah = $this->mLike->getMaxLike($this->uri->segment(3,0));
        if($like!=1){
            $this->mLike->addLike($this->uri->segment(3, 0), $jumlah);
            $this->session->set_userdata('like', '1');
            echo ($jumlah+1);
            exit(0);
        }
        echo $jumlah;
    }
}
?>
