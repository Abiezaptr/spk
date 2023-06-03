<?php

class Karyawan_model extends CI_Model
{
    //Akun Aktif
    public function admin_Active()
    {
        return $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function get_AllGuru()
    {
        $query = "SELECT * FROM `karyawan` g 
        join `admin` a on g.id_admin = a.id_admin ORDER BY g.id_karyawan";
        return $this->db->query($query)->result_array();
    }

    public function get_Guru($admin)
    {
        $query = "SELECT * FROM `karyawan` g 
        join `admin` a on g.id_admin = a.id_admin ORDER BY g.id_karyawan";
        return $this->db->query($query, $admin)->result_array();
    }

    public function get_ById($id)
    {
        $query = "SELECT * FROM `karyawan` g 
        join `admin` a on g.id_admin = a.id_admin ORDER BY g.id_karyawan";
        return $this->db->query($query, $id)->row_array();
        // return $this->db->get_where('guru', ['id_guru' => $id])->row_array();
    }

    public function get_Penilai()
    {
        return $this->db->get_where('admin', ['akses' => "Penilai"])->result_array();
    }

    public function get_Mapel()
    {
        return $this->db->get('penempatan')->result_array();
    }

    public function add()
    {
        $data = [
            'id_admin' => $this->input->post('penilai', true),
            'lokasi' => $this->input->post('lokasi', true),
            'nama_karyawan' => htmlspecialchars($this->input->post('nama', true)),
            'nip' => htmlspecialchars($this->input->post('nip', true)),
            'jabatan' => htmlspecialchars($this->input->post('jabatan', true)),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'pendidikan_terakhir' => $this->input->post('pendidikan'),
            'aktif' => "Y"
        ];

        $this->db->insert('karyawan', $data);
    }

    public function edit($id)
    {
        $data = [
            'id_admin' => $this->input->post('penilai', true),
            'nama_guru' => htmlspecialchars($this->input->post('nama', true)),
            'nip' => htmlspecialchars($this->input->post('nip', true)),
            'jabatan' => htmlspecialchars($this->input->post('jabatan', true)),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'pendidikan_terakhir' => $this->input->post('pendidikan'),
            'aktif' => htmlspecialchars($this->input->post('aktif', true))
        ];

        $this->db->where('id_karyawan', $id);
        $this->db->update('karyawan', $data);
    }

    public function delete($id)
    {
        $this->db->delete('karyawan', ['id_karyawan' => $id]);
    }
}
