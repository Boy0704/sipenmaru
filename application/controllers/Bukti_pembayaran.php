<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bukti_pembayaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Bukti_pembayaran_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'bukti_pembayaran/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'bukti_pembayaran/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'bukti_pembayaran/index.html';
            $config['first_url'] = base_url() . 'bukti_pembayaran/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Bukti_pembayaran_model->total_rows($q);
        $bukti_pembayaran = $this->Bukti_pembayaran_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'bukti_pembayaran_data' => $bukti_pembayaran,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'bukti_pembayaran/bukti_pembayaran_list'
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->Bukti_pembayaran_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pembayaran' => $row->id_pembayaran,
		'no_pendaftaran' => $row->no_pendaftaran,
		'nama_lengkap' => $row->nama_lengkap,
		'nama_pengirim' => $row->nama_pengirim,
		'bukti_pembayaran' => $row->bukti_pembayaran,
	    );
            $this->load->view('bukti_pembayaran/bukti_pembayaran_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bukti_pembayaran'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('bukti_pembayaran/create_action'),
	    'id_pembayaran' => set_value('id_pembayaran'),
	    'no_pendaftaran' => set_value('no_pendaftaran'),
	    'nama_lengkap' => set_value('nama_lengkap'),
	    'nama_pengirim' => set_value('nama_pengirim'),
	    'bukti_pembayaran' => set_value('bukti_pembayaran'),
        'konten' => 'bukti_pembayaran/bukti_pembayaran_form'
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
		'no_pendaftaran' => $this->input->post('no_pendaftaran',TRUE),
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'nama_pengirim' => $this->input->post('nama_pengirim',TRUE),
		'bukti_pembayaran' => $this->input->post('bukti_pembayaran',TRUE),
	    );

            $this->Bukti_pembayaran_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('bukti_pembayaran'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Bukti_pembayaran_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('bukti_pembayaran/update_action'),
		'id_pembayaran' => set_value('id_pembayaran', $row->id_pembayaran),
		'no_pendaftaran' => set_value('no_pendaftaran', $row->no_pendaftaran),
		'nama_lengkap' => set_value('nama_lengkap', $row->nama_lengkap),
		'nama_pengirim' => set_value('nama_pengirim', $row->nama_pengirim),
		'bukti_pembayaran' => set_value('bukti_pembayaran', $row->bukti_pembayaran),
        'konten' => 'bukti_pembayaran/bukti_pembayaran_form'
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bukti_pembayaran'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pembayaran', TRUE));
        } else {
            $data = array(
		'no_pendaftaran' => $this->input->post('no_pendaftaran',TRUE),
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'nama_pengirim' => $this->input->post('nama_pengirim',TRUE),
		'bukti_pembayaran' => $this->input->post('bukti_pembayaran',TRUE),
	    );

            $this->Bukti_pembayaran_model->update($this->input->post('id_pembayaran', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('bukti_pembayaran'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Bukti_pembayaran_model->get_by_id($id);

        if ($row) {
            $this->Bukti_pembayaran_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('bukti_pembayaran'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bukti_pembayaran'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('no_pendaftaran', 'no pendaftaran', 'trim|required');
	$this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'trim|required');
	$this->form_validation->set_rules('nama_pengirim', 'nama pengirim', 'trim|required');
	$this->form_validation->set_rules('bukti_pembayaran', 'bukti pembayaran', 'trim|required');

	$this->form_validation->set_rules('id_pembayaran', 'id_pembayaran', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Bukti_pembayaran.php */