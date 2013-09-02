<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Tambahbarang extends Controller
{
    function Tambahbarang()
    {
        parent::Controller();
        $this->load->library(array('session','form_validation', 'upload','cart'));
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_error_delimiters('<br/><font color="red">* ', '</font>');
    }

    function index()
    {
        $ngerror=$this->uri->segment(3,0);
        if($ngerror!=0)
        echo $ngerror;
        if($this->session->userdata('type')=="member"){
            $this->form_validation->set_rules('nama', 'Nama barang', 'required');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi barang', 'required');
            $this->form_validation->set_rules('jumlah', 'Jumlah barang', 'required');
            $this->form_validation->set_rules('harga', 'Harga barang', 'required');
            $this->form_validation->set_rules('kategori', 'Kategori barang', 'required');

            $this->load->model('mupload');
            $data['kategori']=$this->mupload->getKategori();

            if ($this->form_validation->run() != TRUE)
            {
                $this->load->view('tambahbarang',$data);
            }
            //validasi lulus
            else
            {
                $this->load->model('mupload');
                //upload barang
                $result=$this->mupload->addBarang();
                $barang_id="";
                foreach($result as $row){
                    $barang_id=$row->barang_id;
                }
                //upload foto barang
                $result = $this->mupload->getMaxIndex();
                $max=0;
                foreach($result as $row){
                    $max = $row->jumlah;
                }
                //setting upload
                $config['upload_path'] = '/home/exodia/upload/';
                //$config['upload_path'] = base_url()."/upload/";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']	= '100';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';
                $config['file_name'] = 'kop'.$max.'.jpg';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if($this->upload->do_upload()){
                    $data = $this->upload->data();
                    $this->mupload->addFotoBarang($max, $data['file_ext'], $barang_id);
                    //echo "<script language=\"javascript\">alert(\"tambah barang sukses\")</script>";
                    redirect('tambahbarang','refresh');
                    $success = true;
                }else //echo "<script language=\"javascript\">alert(\"ada error\")</script>";
                {
                    redirect('tambahbarang/index/'.$this->upload->display_errors(),'refresh');
                }
            }
        }
        else{
            redirect('login', 'refresh');
        }
    }
}
?>