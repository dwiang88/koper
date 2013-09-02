<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class mregistrasi extends Model
{
    function mregistrasi()
    {
        parent::Model();
        $this->load->database();
    }

    function addUser()
    {
        $nama=$this->input->post('nama');
        $password=$this->encrypt->encode($this->input->post('password'), 'g7Rd7G8vhrD78yhv398hiDHrg89h34gh');
        $email=$this->input->post('email');
        $alamat=$this->input->post('alamat');
        $sex=$this->input->post('sex');
        $deskripsi=$this->input->post('deskripsi');
        $nik = $this->input->post('nik');
//        $query = "select member_id from member where nik='$nik'";
//        $data = $this->db->query($query);
        
        $query = "insert into member values('$nik', ".$this->db->escape($nama).",".$this->db->escape($password).",".$this->db->escape($alamat).",".$this->db->escape($sex).",".$this->db->escape($email).",null,".$this->db->escape($nik).",".$this->db->escape($deskripsi).",NOW(), '1', null);";
        $data = $this->db->query($query);
        return $data;
    }

 function getProfile($id){
        $query = "select member_nama, member_pass, member_alamat, member_sex, member_email, member_foto, member_phone, member_desc from member where member_id=".$this->db->escape($id);
        $data = $this->db->query($query);
        return $data->result();
    }

    function updateUser(){
        $id=$this->session->userdata('id');
        $source=  "/foto/".$id.".jpg";
        $query = "update member set member_nama=".$this->db->escape($this->input->post('nama')).", member_alamat=".$this->db->escape($this->input->post('alamat')).", member_email=".$this->db->escape($this->input->post('email')).", member_foto='$source', member_phone=".$this->db->escape($this->input->post('telepon')).", member_desc=".$this->db->escape($this->input->post('deskripsi'))." where member_id=".$this->db->escape($id);
        $data = $this->db->query($query);
        return $data;
    }

}
?>