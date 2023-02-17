
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    // public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('Mod_dashboard', 'model');
	// }

    function index()
    {
        $data['title']   = 'Dashboard';
        $data['script']  = $this->load->view("contents/dashboard/scripts", $data, true);
        $data['style']   = $this->load->view("contents/dashboard/style", $data, true);

		$this->template->load('template', 'contents/dashboard/index', $data);
    }
}