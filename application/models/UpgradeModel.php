<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UpgradeModel extends CI_Model
{

    public function getDataTransaction($limit)
    {
        $result = $this->db->get('transaction');
        return $result->result_array();
    }

    public function getDataTransactionByIdUser($id_user)
    {
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->where('id_user',$id_user);
        $result = $this->db->get();
        return $result->result_array();
    }
    public function checkUserTransaction($id_user)
    {
        $query = $this->db->get_where('transaction', array('id_user' => $id_user));
       
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }
    
    public function addToTransaction($post)
    {
        $data = array(
            'id_user' => $post['id_user'],
            'id_image' => 1,
            'total' =>$post['total'],
            'status' => 0

        );

        $this->db->insert('transaction', $data);
        $status = $this->db->affected_rows() == 1 ? true : false;

        return [
            'status'=>$status
        ];
    }
    public function updateTransaction($total,$id_user)
    {
        $data = array(
            'total' => $total,
        );

        $this->db->where('id_user', $id_user);
        $this->db->update('transaction', $data);
        $status = $this->db->affected_rows() == 1 ? true : false;

        return [
            'status'=>$status
        ];;
    }
    public function updateImageTransaction($image,$id_user)
    {
        $data = array(
            'id_image' => $image,
        );

        $this->db->where('id_user', $id_user);
        $this->db->update('transaction', $data);
        $status = $this->db->affected_rows() == 1 ? true : false;

        return [
            'status'=>$status
        ];;
    }

    // public function get_kategori()
    // {
    //     $query = $this->db->get('service');
    //     return $query->result();
    // }

    // public function add_service($data)
    // {
    //     $this->db->insert('service_order', $data);
    // }

    // public function login($username, $password)
    // {
    //     $this->db->where('email_member', $username);
    //     $this->db->where('password_member', $password);
    //     $query = $this->db->get('member');
    //     if ($query->num_rows() > 0) {
    //         return $query->row();
    //     } else {
    //         return false;
    //     }
    // }

}
