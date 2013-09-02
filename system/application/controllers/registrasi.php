<?php
class Registrasi extends Controller {

    function Registrasi(){
        parent::Controller();
        $this->load->helper(array('url', 'form'));
        $this->load->library(array('encrypt','email','form_validation','session','cart'));
        $this->form_validation->set_error_delimiters('<font color="red">* ', '</font>');
    }

    function index(){
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('password', 'password', 'required|matches[confirmpassword]');
        $this->form_validation->set_rules('confirmpassword', 'confirmpassword', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_emails');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('sex', 'jenis kelamin', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required|numerik');

        /*# the response from reCAPTCHA
        $resp = null;
        # the error code from reCAPTCHA, if any
        $error = null;
        require_once('recaptchalib.php');
        $publickey = "6LdoJroSAAAAAD4jMrpopX9coLrHHso4cU6kEFl7";
        $privatekey = "6LdoJroSAAAAAJyci4NsLH3p_A1gsgCYPf4UzR3F";
        $data['captcha']=recaptcha_get_html($publickey, $error);
        $data['error']=false;*/
        if($this->form_validation->run())
        {
/*            $resp = recaptcha_check_answer ($privatekey,
                                          $_SERVER["REMOTE_ADDR"],
                                          $_POST["recaptcha_challenge_field"],
                                          $_POST["recaptcha_response_field"]);

            if ($resp->is_valid)
            {
                $this->load->model('msignup');
                $result = $this->msignup->addUser();
                if($result==1){
                    redirect('signup/confirmation');
                    exit();
                }
                else{
                    $data['error'] = TRUE;
                }
            } else
            {
                $error = $resp->error;
                $data['captcha']=recaptcha_get_html($publickey, $error);
            }*/
            $this->load->model('mregistrasi');
            $result = $this->mregistrasi->addUser();
            if($result==1){
                $data['error'] = FALSE;
                echo "<script language=\"javascript\">alert(\"registrasi berhasil\")</script>";
                $this->load->view('jual_beli');
            }
            else{
                $data['error'] = TRUE;
                echo "<script language=\"javascript\">alert(\data sudah ada\")</script>";
            }
        }
        $this->load->view('registrasi');
    }
}