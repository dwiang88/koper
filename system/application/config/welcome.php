<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();
                $this->load->library('session');
	}
	
	function index()
	{
		$this->load->view('index');
	}

        function profil()
        {
            $this->load->view('profil');
        }

        function detail()
        {
            $this->load->view('barang_detail');
        }

        function jual_beli()
        {
            $this->load->view('jual_beli');
        }

        function register()
        {
            $this->load->view('registrasi');
        }

        function tambahbarang()
        {
            $this->load->view('tambahbarang');
        }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */