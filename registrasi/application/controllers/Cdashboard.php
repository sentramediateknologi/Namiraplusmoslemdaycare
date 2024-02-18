<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require 'vendor/phpspreadsheet/autoload.php';

class CDashboard extends CI_Controller {
	function __construct() {
		parent::__construct();

        if (empty($this->session->userdata['auth'])) {
            $this->session->set_flashdata('failed', 'Anda Harus Login');

            redirect('login');
        } 

        $this->data = array(
            'controller'=>'cdashboard',
            'redirect'=>'dashboard',
            'title'=>'Dahsboard',
            'parent'=>'dashboard'
        );

        ## load model here 
        $this->load->model('Mregisteranak', 'RegisterAnak');
	}

    public function index() {   

        $data = $this->data;

        $tahun = date('Y');

        $bulan = date('m');
        
        $data['detail_anak'] = [];
        
        $data['anak'] = $this->RegisterAnak->getByIDorangtua($this->session->userdata['auth']->id);    

        if(!empty($data['anak'])) {
            $data['detail_anak'] = $this->RegisterAnak->getDetails($data['anak']->id);  
        }
        
        if(!empty($data['detail_anak'])) {
            $data['detail_anak']->bulan = 12 + $bulan - date('m', strtotime($data['detail_anak']->tanggal_lahir));
            $data['detail_anak']->tahun = $tahun - date('Y', strtotime($data['detail_anak']->tanggal_lahir));
        }  

        $this->load->view('inc/dashboard/user', $data);
    }	

}
