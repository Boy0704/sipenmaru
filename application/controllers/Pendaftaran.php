<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pendaftaran/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pendaftaran/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pendaftaran/index.html';
            $config['first_url'] = base_url() . 'pendaftaran/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pendaftaran_model->total_rows($q);
        $pendaftaran = $this->Pendaftaran_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pendaftaran_data' => $pendaftaran,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'pendaftaran/pendaftaran_list'
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->Pendaftaran_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pendaftaran' => $row->id_pendaftaran,
		'no_pendaftaran' => $row->no_pendaftaran,
		'nama_lengkap' => $row->nama_lengkap,
		'tempat' => $row->tempat,
		'tgl_lahir' => $row->tgl_lahir,
		'alamat' => $row->alamat,
		'rt' => $row->rt,
		'rw' => $row->rw,
		'no_rumah' => $row->no_rumah,
		'kode_pos' => $row->kode_pos,
		'no_telp' => $row->no_telp,
		'tempat_tinggal' => $row->tempat_tinggal,
		'status_kawin' => $row->status_kawin,
		'jenis_pekerjaan' => $row->jenis_pekerjaan,
		'kewarganegaraan' => $row->kewarganegaraan,
		'agama' => $row->agama,
		'hobi' => $row->hobi,
		'slta' => $row->slta,
		'jurusan' => $row->jurusan,
		'no_sttb' => $row->no_sttb,
		'tgl_sttb' => $row->tgl_sttb,
		'tempat_sttb' => $row->tempat_sttb,
		'pilihan_studi' => $row->pilihan_studi,
		'foto' => $row->foto,
		'tgl_buat' => $row->tgl_buat,
		'jam_buat' => $row->jam_buat,
		'tahun_lulus' => $row->tahun_lulus,
		'metode_pembayaran' => $row->metode_pembayaran,
		'konten' => 'pendaftaran/pendaftaran_read'
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendaftaran'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pendaftaran/create_action'),
	    'id_pendaftaran' => set_value('id_pendaftaran'),
	    'no_pendaftaran' => set_value('no_pendaftaran'),
	    'nama_lengkap' => set_value('nama_lengkap'),
	    'tempat' => set_value('tempat'),
	    'tgl_lahir' => set_value('tgl_lahir'),
	    'alamat' => set_value('alamat'),
	    'rt' => set_value('rt'),
	    'rw' => set_value('rw'),
	    'no_rumah' => set_value('no_rumah'),
	    'kode_pos' => set_value('kode_pos'),
	    'no_telp' => set_value('no_telp'),
	    'tempat_tinggal' => set_value('tempat_tinggal'),
	    'status_kawin' => set_value('status_kawin'),
	    'jenis_pekerjaan' => set_value('jenis_pekerjaan'),
	    'kewarganegaraan' => set_value('kewarganegaraan'),
	    'agama' => set_value('agama'),
	    'hobi' => set_value('hobi'),
	    'slta' => set_value('slta'),
	    'jurusan' => set_value('jurusan'),
	    'no_sttb' => set_value('no_sttb'),
	    'tgl_sttb' => set_value('tgl_sttb'),
	    'tempat_sttb' => set_value('tempat_sttb'),
	    'pilihan_studi' => set_value('pilihan_studi'),
	    'foto' => set_value('foto'),
	    'tgl_buat' => set_value('tgl_buat'),
	    'jam_buat' => set_value('jam_buat'),
	    'tahun_lulus' => set_value('tahun_lulus'),
	    'konten' => 'pendaftaran/pendaftaran_form',
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
		'tempat' => $this->input->post('tempat',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'rt' => $this->input->post('rt',TRUE),
		'rw' => $this->input->post('rw',TRUE),
		'no_rumah' => $this->input->post('no_rumah',TRUE),
		'kode_pos' => $this->input->post('kode_pos',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'tempat_tinggal' => $this->input->post('tempat_tinggal',TRUE),
		'status_kawin' => $this->input->post('status_kawin',TRUE),
		'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan',TRUE),
		'kewarganegaraan' => $this->input->post('kewarganegaraan',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'hobi' => $this->input->post('hobi',TRUE),
		'slta' => $this->input->post('slta',TRUE),
		'jurusan' => $this->input->post('jurusan',TRUE),
		'no_sttb' => $this->input->post('no_sttb',TRUE),
		'tgl_sttb' => $this->input->post('tgl_sttb',TRUE),
		'tempat_sttb' => $this->input->post('tempat_sttb',TRUE),
		'pilihan_studi' => $this->input->post('pilihan_studi',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'tgl_buat' => $this->input->post('tgl_buat',TRUE),
		'jam_buat' => $this->input->post('jam_buat',TRUE),
		'tahun_lulus' => $this->input->post('tahun_lulus',TRUE),
	    );

            $this->Pendaftaran_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pendaftaran'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pendaftaran_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pendaftaran/update_action'),
		'id_pendaftaran' => set_value('id_pendaftaran', $row->id_pendaftaran),
		'no_pendaftaran' => set_value('no_pendaftaran', $row->no_pendaftaran),
		'nama_lengkap' => set_value('nama_lengkap', $row->nama_lengkap),
		'tempat' => set_value('tempat', $row->tempat),
		'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
		'alamat' => set_value('alamat', $row->alamat),
		'rt' => set_value('rt', $row->rt),
		'rw' => set_value('rw', $row->rw),
		'no_rumah' => set_value('no_rumah', $row->no_rumah),
		'kode_pos' => set_value('kode_pos', $row->kode_pos),
		'no_telp' => set_value('no_telp', $row->no_telp),
		'tempat_tinggal' => set_value('tempat_tinggal', $row->tempat_tinggal),
		'status_kawin' => set_value('status_kawin', $row->status_kawin),
		'jenis_pekerjaan' => set_value('jenis_pekerjaan', $row->jenis_pekerjaan),
		'kewarganegaraan' => set_value('kewarganegaraan', $row->kewarganegaraan),
		'agama' => set_value('agama', $row->agama),
		'hobi' => set_value('hobi', $row->hobi),
		'slta' => set_value('slta', $row->slta),
		'jurusan' => set_value('jurusan', $row->jurusan),
		'no_sttb' => set_value('no_sttb', $row->no_sttb),
		'tgl_sttb' => set_value('tgl_sttb', $row->tgl_sttb),
		'tempat_sttb' => set_value('tempat_sttb', $row->tempat_sttb),
		'pilihan_studi' => set_value('pilihan_studi', $row->pilihan_studi),
		'tgl_buat' => set_value('tgl_buat', $row->tgl_buat),
		'jam_buat' => set_value('jam_buat', $row->jam_buat),
		'tahun_lulus' => set_value('tahun_lulus', $row->tahun_lulus),
		'konten' => 'pendaftaran/pendaftaran_form',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendaftaran'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pendaftaran', TRUE));
        } else {
            $data = array(
		'no_pendaftaran' => $this->input->post('no_pendaftaran',TRUE),
		'nama_lengkap' => $this->input->post('nama_lengkap',TRUE),
		'tempat' => $this->input->post('tempat',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'rt' => $this->input->post('rt',TRUE),
		'rw' => $this->input->post('rw',TRUE),
		'no_rumah' => $this->input->post('no_rumah',TRUE),
		'kode_pos' => $this->input->post('kode_pos',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'tempat_tinggal' => $this->input->post('tempat_tinggal',TRUE),
		'status_kawin' => $this->input->post('status_kawin',TRUE),
		'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan',TRUE),
		'kewarganegaraan' => $this->input->post('kewarganegaraan',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'hobi' => $this->input->post('hobi',TRUE),
		'slta' => $this->input->post('slta',TRUE),
		'jurusan' => $this->input->post('jurusan',TRUE),
		'no_sttb' => $this->input->post('no_sttb',TRUE),
		'tgl_sttb' => $this->input->post('tgl_sttb',TRUE),
		'tempat_sttb' => $this->input->post('tempat_sttb',TRUE),
		'pilihan_studi' => $this->input->post('pilihan_studi',TRUE),
		'tgl_buat' => $this->input->post('tgl_buat',TRUE),
		'jam_buat' => $this->input->post('jam_buat',TRUE),
		'tahun_lulus' => $this->input->post('tahun_lulus',TRUE),
	    );

            $this->Pendaftaran_model->update($this->input->post('id_pendaftaran', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pendaftaran'));
        }
    }
    
    public function delete($id, $pendaftaran) 
    {
        $row = $this->Pendaftaran_model->get_by_id($id);

        if ($row) {
            $this->Pendaftaran_model->delete($id);
            $this->db->where('username', $pendaftaran);
            $this->db->delete('users');
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pendaftaran'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendaftaran'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('no_pendaftaran', 'no pendaftaran', 'trim|required');
	$this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'trim|required');
	$this->form_validation->set_rules('tempat', 'tempat', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('rt', 'rt', 'trim|required');
	$this->form_validation->set_rules('rw', 'rw', 'trim|required');
	$this->form_validation->set_rules('no_rumah', 'no rumah', 'trim|required');
	$this->form_validation->set_rules('kode_pos', 'kode pos', 'trim|required');
	$this->form_validation->set_rules('no_telp', 'no telp', 'trim|required');
	$this->form_validation->set_rules('tempat_tinggal', 'tempat tinggal', 'trim|required');
	$this->form_validation->set_rules('status_kawin', 'status kawin', 'trim|required');
	$this->form_validation->set_rules('jenis_pekerjaan', 'jenis pekerjaan', 'trim|required');
	$this->form_validation->set_rules('kewarganegaraan', 'kewarganegaraan', 'trim|required');
	$this->form_validation->set_rules('agama', 'agama', 'trim|required');
	$this->form_validation->set_rules('hobi', 'hobi', 'trim|required');
	$this->form_validation->set_rules('slta', 'slta', 'trim|required');
	$this->form_validation->set_rules('jurusan', 'jurusan', 'trim|required');
	$this->form_validation->set_rules('no_sttb', 'no sttb', 'trim|required');
	$this->form_validation->set_rules('tgl_sttb', 'tgl sttb', 'trim|required');
	$this->form_validation->set_rules('tempat_sttb', 'tempat sttb', 'trim|required');
	$this->form_validation->set_rules('pilihan_studi', 'pilihan studi', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim|required');
	$this->form_validation->set_rules('tgl_buat', 'tgl buat', 'trim|required');
	$this->form_validation->set_rules('jam_buat', 'jam buat', 'trim|required');
	$this->form_validation->set_rules('tahun_lulus', 'tahun lulus', 'trim|required');

	$this->form_validation->set_rules('id_pendaftaran', 'id_pendaftaran', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pendaftaran.php */