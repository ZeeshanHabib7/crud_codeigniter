<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crudmodel extends CI_Model{
    public function getData(){
        $q = $this->db->get('users');
        if($q->num_rows() > 0){
            return $q->result();
        } else{
            return FALSE;
        }
    }
    public function submit(){
        $field = array(
            'name'=>$this->input->post('uname'),
            'email'=>$this->input->post('email'),
            'contactno'=>$this->input->post('cno')
        );
        $this->db->insert('users',$field);
        if($this->db->affected_rows()>0){
            return TRUE;
        } else {
            return FALSE; //35:15 se start krna
        }
    }
    public function getDatabyId($id){
        $this->db->where('id',$id);
        $q = $this->db->get('users');
        if($q->num_rows()>0){
            return $q->row();

        }else{
            return FALSE;
        }

    }

    public function update(){
        $id = $this->input->post('txt_hidden');
        $field = array(
            'name'=>$this->input->post('uname'),
            'email'=>$this->input->post('email'),
            'contactno'=>$this->input->post('cno')
        );
        $this->db->where('id', $id);
        $this->db->update('users',$field);
        echo $this->db->last_query();extit;
        if($this->db->affected_rows()> 0){
            return TRUE;
        } else{
            return FALSE;
        }
    }

    public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('users');
		if($this->db->affected_rows() > 0){
			return True;
		}else{
			return FALSE;
		}
	}
}