
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
        $data['title']      = 'Daftar Klub Sepak Bola';
        $data['script']     = $this->load->view("contents/listklub/scripts", $data, true);
        $data['style']      = $this->load->view("contents/listklub/style", $data, true);
        $data['namaklub']  = $this->model->getAllNamaKlub();

		$this->template->load('template', 'contents/listklub/index', $data);
    }

    public function ajax_add()
    {
        $data = array(
            'nama_klub' => $this->input->post('nama_klub'),
            'kota_klub' => $this->input->post('kota_klub'),
            'detail'    => $this->input->post('detail')
        );
        $this->model->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id)
    {
        $data = $this->model->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_update()
    {
        $data = array(
            'nama_klub' => $this->input->post('nama_klub'),
            'kota_klub' => $this->input->post('kota_klub'),
            'detail'    => $this->input->post('detail')
        );
        $this->model->update(array('id_klub' => $this->input->post('id_klub')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id)
    {
        $this->model->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
}