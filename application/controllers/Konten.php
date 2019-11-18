<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Konten extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Konten_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'konten/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'konten/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'konten/index.html';
            $config['first_url'] = base_url() . 'konten/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Konten_model->total_rows($q);
        $konten = $this->Konten_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'konten_data' => $konten,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'konten/konten_list',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->Konten_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_konten' => $row->id_konten,
		'judul' => $row->judul,
		'isi_konten' => $row->isi_konten,
        'konten' => 'konten/konten_read',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('konten'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('konten/create_action'),
	    'id_konten' => set_value('id_konten'),
	    'judul' => set_value('judul'),
	    'isi_konten' => set_value('isi_konten'),
        'konten' => 'konten/konten_form',
	);
        $this->load->view('v_index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'isi_konten' => $this->input->post('isi_konten',TRUE),
	    );

            $this->Konten_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('konten'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Konten_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('konten/update_action'),
		'id_konten' => set_value('id_konten', $row->id_konten),
		'judul' => set_value('judul', $row->judul),
		'isi_konten' => set_value('isi_konten', $row->isi_konten),
        'konten' => 'konten/konten_form',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('konten'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_konten', TRUE));
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'isi_konten' => $this->input->post('isi_konten',TRUE),
	    );

            $this->Konten_model->update($this->input->post('id_konten', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('konten'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Konten_model->get_by_id($id);

        if ($row) {
            $this->Konten_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('konten'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('konten'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('isi_konten', 'isi konten', 'trim|required');

	$this->form_validation->set_rules('id_konten', 'id_konten', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Konten.php */