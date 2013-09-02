<?php
class Jualbeli extends Controller {
    function Jualbeli()
    {
            parent::Controller();
            $this->load->library(array('pagination', 'session', 'cart'));
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


        $this->load->model('mupload');
        $this->load->model('mBarang');
        $data['kategori'] = $this->mupload->getKategori();

        $config['base_url'] = '/web/koper/index.php/jualbeli/index';
        $numrows = $this->mBarang->getMaxBarang($this->uri->segment(4,""));
        $config['total_rows'] = $numrows->num_rows();
        $config['per_page'] = '5';
        $config['num_links'] = 20;
        $config['first_link'] = '<b>Pertama</b>';
        $config['last_link'] = '<b>Terakhir</b>';
        $config['prev_link'] = '<b>Sebelumnya</b>';
        $config['next_link'] = '<b>Sesudahnya</b>';
        $this->pagination->initialize($config);

        $result = $this->mBarang->getBarangList($config['per_page'],$this->uri->segment(3,0),$this->uri->segment(4,""));
        $data['barang'] = $result->result();
        //echo $config['per_page'].",".$this->uri->segment(3,0).",".$config['total_rows'];
        $this->load->view('jual_beli', $data);
    }

    function search(){
        if($this->input->post('search')=="") redirect('jualbeli');
        else{
        $this->load->model('mupload');
        $this->load->model('mBarang');
        $data['kategori'] = $this->mupload->getKategori();

        $result = $this->mBarang->getBarangSearch();
        $data['barang'] = $result->result();
        $this->load->view('jual_beli', $data);
        	}
	  }
}
?>