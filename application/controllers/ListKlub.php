
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ListKlub extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('Mod_listklub', 'model');
	}

    function index()
    {
        $data['title']   = 'Daftar Klub Sepak Bola';
        $data['script']  = $this->load->view("contents/listklub/scripts", $data, true);
        $data['style']   = $this->load->view("contents/listklub/style", $data, true);

		$this->template->load('template', 'contents/listklub/index', $data);
    }
}