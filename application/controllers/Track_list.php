<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Track_list extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
        // $this->session->unset_userdata('name');
        // $this->session->sess_destroy();
        $this->load->model('trackModel');
        $this->load->model('authModel');

    }
    public function index()
    {

       
        $data['limit'] = $this->trackModel->getDataLimit(6);
        $data['top'] = $this->trackModel->getDataLimit(1);
        $data['new'] = $this->trackModel->getDataOrderByNew();
        $data['all'] = $this->trackModel->getAllData();

        $this->load->view('track_list', array('dataHot' => $data['limit'],
            'dataNew' => $data['new'],
            'dataTop' => $data['top'],
            'dataTrack' => $data['all'],
            'title' => 'All Tracks'),
        );



    }
    public function latest()
    {
        // $data['all'] = $this->trackModel->getAllDataNew();
        $data['limit'] = $this->trackModel->getDataLimit(6);
        $data['top'] = $this->trackModel->getDataLimit(1);
        $data['new'] = $this->trackModel->getDataOrderByNew();
        $data['all'] = $this->trackModel->getAllData();

        $this->load->view('track_list', array('dataHot' => $data['limit'],
            'dataNew' => $data['new'],
            'dataTop' => $data['top'],
            'dataTrack' => $data['all'],
            'title' => 'All Tracks'),
        );

        $this->load->view('/templates/footer');

    }
    public function loginModal()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        if ($username == '') {
            $result['pesan'] = "Username harus diisi";
        } elseif ($password == '') {
            $result['pesan'] = "Password harus diisi";
        } else {

            $data = array(
                'email' => $username,
                'password' => $password,
            );

            $result = $this->authModel->login($data);
            if ($result['status'] == 200) {
                $result['pesan'] = "";

            } else {
                $result['pesan'] = "Username atau password salah";

            }

        }

        echo json_encode($result);
    }
    
    public function playlist()
    {
        $idUser = $this->uri->segment(3);
        $data['playlist'] = $this->trackModel->getDataPlaylist($idUser);
        $data['top'] = $this->trackModel->getDataLimit(1);

        $this->load->view('track_list', array(
            'dataTrack' => $data['playlist'],
            'dataTop' => $data['top'],
            'title' => 'Playlist',
        ));
        $this->load->view('/templates/footer');
    }
    public function addToPlaylist()
    {
        $id_track = $this->input->post('id_track');
        $id_user=$this->session->userdata('id_user');
        $arrayData=[
            'id_track'=>$id_track,
            'id_user'=>$id_user
        ];

        $result=$this->trackModel->addToPlaylist($arrayData);
        if($result['status']==true){
            $result['pesan'] = "track added successfully";
        }
        else{
            $result['pesan'] = "track added failed";
        }
      
        echo json_encode($result);

    }
    public function removeFromPlaylist()
    {
        $id_track = $this->input->post('id_track');
        $arrayData=[
            'id_track'=>$id_track,
        ];

        $result=$this->trackModel->removeFromPlaylist($arrayData);
        if($result['status']==true){
            $result['pesan'] = "track has been removed from playlist";
        }
        else{
            $result['pesan'] = "Failed to remove from playlist";
        }
      
        echo json_encode($result);

    }
    public function getAllData(){
       
        $data['all'] = $this->trackModel->getAllData();
        echo json_encode($data);
        
    }
}
