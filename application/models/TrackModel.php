<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TrackModel extends CI_Model
{

    public function getDataLimit($limit)
    {
        $this->db->select('tracks.*,users.id as id_user');
        $this->db->from('tracks');
       
        $this->db->join('playlist', 'playlist.id_track = tracks.id','left');
        if($this->session->userdata('id_user')){
            $this->db->join('(SELECT * from users WHERE users.id='.$this->session->userdata('id_user').')users', 'playlist.id_user = users.id','left');
        }
        else{
            $this->db->join('(SELECT * from users )users', 'playlist.id_user = users.id','left');            
        }
        $this->db->limit($limit);
        $this->db->order_by('id', 'ASC');
        $result = $this->db->get();
        return $result->result_array();
    }

    public function getDataOrderByNew()
    {
        $this->db->select('tracks.*,users.id as id_user');
        $this->db->from('tracks');
       
        $this->db->join('playlist', 'playlist.id_track = tracks.id','left');
        if($this->session->userdata('id_user')){
            $this->db->join('(SELECT * from users WHERE users.id='.$this->session->userdata('id_user').')users', 'playlist.id_user = users.id','left');

        }
        else{
            $this->db->join('(SELECT * from users )users', 'playlist.id_user = users.id','left');            
        }

  
        $this->db->order_by('id', 'DESC');
        $this->db->limit(6);
        $result = $this->db->get();
        return $result->result_array();
    }
    public function getAllData()
    {
        // $this->db->select('*');
        // $this->db->from('tracks');
        // $this->db->order_by('id', 'ASC');
        // $result = $this->db->get();
        // return $result->result_array();
  $this->db->select('tracks.*,users.id as id_user');
        $this->db->from('tracks');
       
        $this->db->join('playlist', 'playlist.id_track = tracks.id','left');
        if($this->session->userdata('id_user')){
            $this->db->join('(SELECT * from users WHERE users.id='.$this->session->userdata('id_user').')users', 'playlist.id_user = users.id','left');

        }
        else{
            $this->db->join('(SELECT * from users )users', 'playlist.id_user = users.id','left');            
        }
        $this->db->order_by('id', 'ASC');

        $result = $this->db->get();
        return $result->result_array();

    }
    public function getAllDataNew()
    {
        $this->db->select('tracks.*,users.id as id_user');
        $this->db->from('tracks');
       
        $this->db->join('playlist', 'playlist.id_track = tracks.id','left');
        if($this->session->userdata('id_user')){
            $this->db->join('(SELECT * from users WHERE users.id='.$this->session->userdata('id_user').')users', 'playlist.id_user = users.id','left');

        }
        else{
            $this->db->join('(SELECT * from users )users', 'playlist.id_user = users.id','left');            
        }

  
        $this->db->order_by('id', 'DESC');
        $result = $this->db->get();
        return $result->result_array();
    }
    public function getDataPopular()
    {
        $this->db->select('tracks.*,users.id as id_user');
        $this->db->from('tracks');
       
        $this->db->join('playlist', 'playlist.id_track = tracks.id','left');
        if($this->session->userdata('id_user')){
            $this->db->join('(SELECT * from users WHERE users.id='.$this->session->userdata('id_user').')users', 'playlist.id_user = users.id','left');
        }
        else{
            $this->db->join('(SELECT * from users )users', 'playlist.id_user = users.id','left');            
        }
        $this->db->where('rating > 7');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(9);
        $result = $this->db->get();
        return $result->result_array();
    }
    public function getDataPlaylist($idUser)
    {
        $this->db->select('*');
        $this->db->from('playlist');
        $this->db->join('users', 'playlist.id_user = users.id');
        $this->db->join('tracks', 'playlist.id_track = tracks.id');
        $this->db->where('playlist.id_user =',$idUser);
        $result = $this->db->get();
        return $result->result_array();
    }
    public function addToPlaylist($post)
    {
        $data = array(
            'id_track' => $post['id_track'],
            'id_user' => $post['id_user'],
            'created_at' => date("Y-m-d"),
        );

        $this->db->insert('playlist', $data);
        $status = $this->db->affected_rows() == 1 ? true : false;

        return [
            'status'=>$status
        ];;
    }public function removeFromPlaylist($post)
    {
        $data = array(
            'id_track' => $post['id_track'],
        );

        $this->db->delete('playlist',$data); 
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
