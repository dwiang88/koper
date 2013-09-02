<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Login extends Controller
{
    function Login()
    {
        parent::Controller();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('cart');
	$this->load->library('encrypt');
        $this->form_validation->set_error_delimiters('<br/><font color="red">* ', '</font>');
    }


    function index()
    {
        $this->form_validation->set_rules('nik', 'nik', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        //cek validasi login
        if ($this->form_validation->run() != TRUE)
        {
            //$this->load->view('index');
            redirect('home','refresh');
        }
        //validasi lulus
        else
        {
            $this->load->model('mlogin','', TRUE);
            $hasil = $this->mlogin->getLoggedIn();
            foreach($hasil as $row)
            {
                $password = $this->encrypt->decode($row->member_pass, 'g7Rd7G8vhrD78yhv398hiDHrg89h34gh');
                if($password==$this->input->post('password'))
                {
                    $this->session->set_userdata('id', $row->member_id);
                    $this->session->set_userdata('type', 'member');
                    redirect('jualbeli', 'refresh');
                    exit(0);
                }
            }
            $data['error'] = TRUE;
            $this->load->view('index', $data);
        }
    }

    function logout(){
        $this->session->sess_destroy();
	  redirect('home','refresh');
    }
}
?>
