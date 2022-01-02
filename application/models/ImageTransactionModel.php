<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ImageTransactionModel extends CI_Model
{

    public function updateImageTransaction($post){
        $data = array(
            'id_user' => $post['id_user'],
        );

        // $this->db->where('id_user', $id_user);
        $this->db->update('transaction', $data);
        $status = $this->db->affected_rows() == 1 ? true : false;

        return [
            'status'=>$status
        ];;
    }
    public function insertImageTransaction($post){
        $data = array(
            'description' => 'user-'.(string)$post['id_user'],
            'name' => $post['file_name'],
            'size' => $post['size'],
            'type' => $post['type']
        );


        $this->db->insert('image_transaction', $data);
        $status = $this->db->affected_rows() == 1 ? true : false;
        $insert_id = $this->db->insert_id();

        return [
            'status'=>$status,
            'insert_id'=> $insert_id
        ];
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
