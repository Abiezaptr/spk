<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('Karyawan_model');
    }

    public function index()
    {
        $data['admin'] = $this->Karyawan_model->admin_Active();
        $admin = $data['admin']['id_admin'];
        $data['title'] = 'E-SPK | Manage Karyawan';
        $data['position'] = 'Karyawan';
        if ($this->session->userdata('akses') == 'Administrator') {
            $data['guru'] = $this->Karyawan_model->get_AllGuru();
        } else {
            $data['guru'] = $this->Karyawan_model->get_Guru($admin);
        }
        $data['mapel'] = $this->Karyawan_model->get_Mapel();
        $data['pendidikan'] = ['SD', 'SMP', 'SMA', 'SMK', 'D3', 'D4', 'S1', 'S2', 'S3'];
        $data['jabatan'] = ['CEO Founder', 'Supervisor I', 'Supervisor II'];
        $data['penempatan'] = ['Head Office', 'Kantor Cabang I', 'Kantor Cabang II'];
        $data['penilai'] = $this->Karyawan_model->get_Penilai();

        $this->form_validation->set_rules('nama', 'Nama Guru', 'required|trim');
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        // $this->form_validation->set_rules('tempat', 'Mata Pelajaran', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('karyawan/index', $data);
            $this->load->view('template/footer');
        } else {
            $this->Karyawan_model->add();
            $this->session->set_flashdata('done', 'Data berhasil ditambah');
            redirect('karyawan');
        }
    }

    public function detail($id)
    {
        $data['admin'] = $this->Karyawan_model->admin_Active();
        $data['title'] = 'Penilaian Kinerja Guru - Guru';
        $data['position'] = 'Guru';
        $data['guru'] = $this->Karyawan_model->get_ById($id);
        $data['mapel'] = $this->Karyawan_model->get_Mapel();
        $this->load->view('template/header', $data);
        $this->load->view('karyawan/detail', $data);
        $this->load->view('template/footer');
    }

    public function ubah($id)
    {
        $data['admin'] = $this->Karyawan_model->admin_Active();
        $data['title'] = 'E-SPK | Manage Karyawan';
        $data['position'] = 'Guru';
        $data['guru'] = $this->Karyawan_model->get_ById($id);
        $data['mapel'] = $this->Karyawan_model->get_Mapel();
        $data['pendidikan'] = ['SD', 'SMP', 'SMA', 'SMK', 'D3', 'D4', 'S1', 'S2', 'S3'];
        $data['jabatan'] = ['Sales Manager', 'Sales Staff'];
        $data['penempatan'] = ['Head Office', 'Kantor Cabang I', 'Kantor Cabang II'];
        $data['penilai'] = $this->Karyawan_model->get_Penilai();

        $this->form_validation->set_rules('nama', 'Nama Guru', 'required|trim');
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        // $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('mapel', 'Mata Pelajaran', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('karyawan/ubah', $data);
            $this->load->view('template/footer');
        } else {
            $this->Karyawan_model->edit($id);
            $this->session->set_flashdata('done', 'Data berhasil diubah');
            redirect('karyawan');
        }
    }

    public function hapus($id)
    {
        // Ambil id_nilai berdasarkan id_karyawan dari tabel nilai
        $nilai = $this->db->select('id_nilai')->get_where('nilai', ['id_karyawan' => $id])->row();
        $id_nilai = $nilai->id_nilai;

        // Hapus data terkait di tabel penilaian
        $this->db->delete('penilaian', ['id_nilai' => $id_nilai]);

        // Hapus data dari tabel nilai
        $this->db->delete('nilai', ['id_karyawan' => $id]);

        // Hapus data dari tabel karyawan
        $this->db->delete('karyawan', ['id_karyawan' => $id]);

        // Mengirim respons JSON
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'success'));
        exit;
    }
}
