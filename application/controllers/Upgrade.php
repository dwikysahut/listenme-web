<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upgrade extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
        // $this->session->unset_userdata('name');
        // $this->session->sess_destroy();
        $this->load->model('trackModel');
        $this->load->model('authModel');
        $this->load->model('imageTransactionModel');
        $this->load->model('upgradeModel');
        $this->load->helper(array('form', 'url'));

    }
    public function index()
    {
        $randomNum = rand(1, 999);
        $total = 50000 + $randomNum;
        $cek_user = $this->upgradeModel->checkUserTransaction($this->session->userdata('id_user'));
        if (!$cek_user) {
            $par = array(
                'id_user' => $this->session->userdata('id_user'),
                'total' => $total,
            );
            $this->upgradeModel->addToTransaction($par);
        } else {
            $this->upgradeModel->updateTransaction($total, $this->session->userdata('id_user'));
        }
        $this->load->view('upgrade', array('total' => $total,
            'kode_unik' => $randomNum, 'msg' => '')
        );

    }

    public function upload()
    {
        $new_name = $this->session->userdata('id_user') . '-' . time() . $_FILES["doc"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path'] = './uploads/image';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1000;
        $this->load->library('upload', $config);
        $is_success = false;

        if (!$this->upload->do_upload('doc')) {
            $error = array('error' => $this->upload->display_errors());
            $result['pesan'] = "Upload Failed";
            $is_success = false;

            // $this->load->view('upgrade', array('total' => $total,
            // 'kode_unik' => -2,'msg'=> $error['error']));
        } else {
            $data = $this->upload->data();
            $is_success = true;
            $data_array = [
                'id_user' => $this->session->userdata('id_user'),
                'file_name' => $data['file_name'],
                'type' => $data['file_type'],
                'size' => $data['file_size'],
            ];
            $query = $this->imageTransactionModel->insertImageTransaction($data_array);
            if ($query['status']) {
                $result = $this->upgradeModel->updateImageTransaction($query['insert_id'], $this->session->userdata('id_user'));
                if ($result['status']) {
                    $result['pesan'] = "Upload Successfully";
                }

            }

            // $this->load->view('upgrade', array('total' => $total,
            // 'kode_unik' => $randomNum,'data'=>$data,'msg'=> 'success'));

        }
        echo json_encode($result);
    }

}
