<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class mlogin extends Model
{
    function mlogin()
    {
        parent::Model();
        $this->load->database();
    }

    function getLoggedIn()
    {
        $nik=$this->input->post('nik');
        //$password=$this->input->post('password');
        $query = "select member_id, member_pass from member where member_id=".$this->db->escape($nik);//." and password=".$this->db->escape($password);
        $data = $this->db->query($query);
        return $data->result();
    }
}
?>