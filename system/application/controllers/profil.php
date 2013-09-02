<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Profil extends Controller
{
    function Profil()
    {
        parent::Controller();
        $this->load->library(array('session','cart', 'pagination','form_validation'));
        $this->load->helper(array('form', 'url'));
    }

    function index()
    {
        $this->load->model('mprofil');
        
        $config['base_url'] = '/index.php/profil/index';
        $numrows = $this->mprofil->getMaxBarangMember();
        $config['total_rows'] = $numrows->num_rows();
        $config['per_page'] = 6;
        $config['num_links'] = 20;
        $config['first_link'] = '<b>Pertama</b>';
        $config['last_link'] = '<b>Terakhir</b>';
        $config['prev_link'] = '<b>Sebelumnya</b>';
        $config['next_link'] = '<b>Sesudahnya</b>';
        $this->pagination->initialize($config);
        
        $hasil= $this->mprofil->getInfo();
        $offset = $this->uri->segment(3, 0);
        if(!is_numeric($offset)){
            $offset = 0;
        }
        $data['barang'] = $this->mprofil->getBarang($config['per_page'],$offset);
        $id = $this->session->userdata('id');
        if($id!=0) $data['info'] = $hasil;
        else $data['info'] = "kosong";

        $this->load->view('profil', $data);
//        foreach($hasil as $row){
//            echo "$row->member_nama, $row->member_alamat, $row->member_email, $row->member_phone";
//        }
//        foreach($data['barang'] as $row){
//            echo "$row->barang_nama<br/>";
//        }
}
 function edit(){
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_emails');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');

        $this->load->model('mregistrasi');
        $id = $this->session->userdata('id');
        $data['info'] = $this->mregistrasi->getProfile($id);

        //setting upload
        //$config['upload_path'] = '/home/exodia/foto/';
        $config['upload_path'] = './foto/';
        $config['allowed_types'] = 'gif|jpg|png';
        $id = $this->session->userdata('id');
        $config['file_name'] = $id.'.jpg';
        $config['overwrite'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if($this->form_validation->run())
        {
            $this->load->model('mregistrasi');
            $result = $this->mregistrasi->updateUser();
            if($result==1){
                $data['error'] = FALSE;
                //echo "berhasil";
            }
            else{
                $data['error'] = TRUE;
                echo "data sudah ada";
            }

            if($this->upload->do_upload()){
                $data = $this->upload->data();
                redirect('jualbeli','refresh');
            }else echo $this->upload->display_errors();
        }
        $this->load->view('edit-profile', $data);
    }
}