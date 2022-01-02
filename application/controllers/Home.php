<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
        $data['hot'] = $this->trackModel->getDataLimit(6);
        $data['top'] = $this->trackModel->getDataLimit(1);
        $data['new'] = $this->trackModel->getDataOrderByNew();
        $data['popular'] = $this->trackModel->getDataPopular();
        $data['all'] = $this->trackModel->getAllData();
        
        $this->load->view('home', array('dataHot' => $data['hot'],
            'dataNew' => $data['new'],
            'dataTop' => $data['top'],
            'dataPopular' => $data['popular'],
            'dataAll' => $data['all'],
        ));
      
    }

    public function loginModal()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        if ($username == '') {
            $result['pesan'] = "Username Cannot be Empty";
        } elseif ($password == '') {
            $result['pesan'] = "Password Cannot be Empty";
        } else {

            $data = array(
                'email' => $username,
                'password' => $password,
            );

            $result = $this->authModel->login($data);
            if ($result['status'] == 200) {
                $result['pesan'] = "";

            } else {
                $result['pesan'] = "Incorrect Username or Password";

            }

        }

        echo json_encode($result);
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

}
