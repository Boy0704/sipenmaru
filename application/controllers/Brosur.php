<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Brosur extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Brosur_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'brosur/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'brosur/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'brosur/index.html';
            $config['first_url'] = base_url() . 'brosur/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Brosur_model->total_rows($q);
        $brosur = $this->Brosur_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'brosur_data' => $brosur,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'brosur/brosur_list',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->Brosur_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_brosur' => $row->id_brosur,
		'judul' => $row->judul,
		'brosur' => $row->brosur,
        'konten' => 'brosur/brosur_read',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('brosur'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('brosur/create_action'),
	    'id_brosur' => set_value('id_brosur'),
	    'judul' => set_value('judul'),
	    'brosur' => set_value('brosur'),
        'konten' => 'brosur/brosur_form',
	);
        $this->load->view('v_index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $nmfile = "brosur_".time();
            $config['upload_path'] = './files/brosur';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '20000';
            $config['file_name'] = $nmfile;
            // load library upload
            $this->load->library('upload', $config);
            // upload gambar 1
            $this->upload->do_upload('brosur');
            $result1 = $this->upload->data();
            $result = array('gambar'=>$result1);
            $dfile = $result['gambar']['file_name'];

            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'brosur' => $dfile,
	    );

            $this->Brosur_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('brosur'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Brosur_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('brosur/update_action'),
		'id_brosur' => set_value('id_brosur', $row->id_brosur),
		'judul' => set_value('judul', $row->judul),
		'brosur' => set_value('brosur', $row->brosur),
        'konten' => 'brosur/brosur_form',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('brosur'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_brosur', TRUE));
        } else {

        if ($_FILES['brosur']['name'] == '' ) {

            

            $data = array(
        'judul' => $this->input->post('judul',TRUE),
        );

            $this->Brosur_model->update($this->input->post('id_brosur', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('brosur'));

        } else {

            $nmfile = "brosur_".time();
            $config['upload_path'] = './files/brosur';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '20000';
            $config['file_name'] = $nmfile;
            // load library upload
            $this->load->library('upload', $config);
            // upload gambar 1
            $this->upload->do_upload('brosur');
            $result1 = $this->upload->data();
            $result = array('gambar'=>$result1);
            $dfile = $result['gambar']['file_name'];

            $data = array(
                'judul' => $this->input->post('judul',TRUE),
                'brosur' => $dfile,
                );

                    $this->Brosur_model->update($this->input->post('id_brosur', TRUE), $data);
                    $this->session->set_flashdata('message', 'Update Record Success');
                    redirect(site_url('brosur'));
        }

            
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Brosur_model->get_by_id($id);

        if ($row) {
            $this->Brosur_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('brosur'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('brosur'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');

	$this->form_validation->set_rules('id_brosur', 'id_brosur', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Brosur.php */