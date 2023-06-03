<?php

class Admin_Model extends CI_Model
{
    //Akun Aktif
    public function admin_Active()
    {
        return $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function tahun_Active()
    {
        return $this->db->get_where('periode', ['aktif' => 'Y'])->row_array();
    }

    public function count_Guru()
    {
        return $this->db->count_all_results('karyawan');
    }

    public function count_GuruAktif($tahun)
    {
        $query = "SELECT COUNT(id_karyawan) as jumlah from 
        (SELECT id_karyawan FROM `nilai` WHERE id_periode = ? GROUP BY id_karyawan) as sub_query";
        return $this->db->query($query, $tahun)->row_array();
    }

    public function count_Penilai()
    {
        $query = "SELECT count(id_admin) as jumlah FROM `admin` WHERE `akses` = 'Penilai'";
        return $this->db->query($query)->row_array();
    }

    public function count_Mapel()
    {
        return $this->db->count_all_results('penempatan');
    }

    public function get_Alternatif()
    {
        return $this->db->get('alternatif')->result_array();
    }

    public function jumlah($id_a, $tahun)
    {
        $query = "SELECT COUNT(*) as jumlah from (SELECT n.id_karyawan from penilaian p 
        JOIN nilai n on p.id_nilai = n.id_nilai
        JOIN karyawan g on n.id_karyawan = g.id_karyawan
        WHERE p.rank = ? AND n.id_periode = ?
        GROUP BY n.id_karyawan) as sub_query";
        return $this->db->query($query, array($id_a, $tahun))->row_array();
    }

    public function get_Guru($id_a, $tahun)
    {
        $query = "SELECT * , (SELECT nama_alternatif from alternatif WHERE id_alternatif = ?) as alternatif from 
        (SELECT n.id_karyawan, g.nama_karyawan, g.nip from penilaian p 
        JOIN nilai n on p.id_nilai = n.id_nilai 
        JOIN karyawan g on n.id_karyawan = g.id_karyawan 
        WHERE p.rank = ? AND n.id_periode = ? 
        GROUP BY n.id_karyawan) as sub_query";
        return $this->db->query($query, array($id_a, $id_a, $tahun))->result_array();
    }

    public function edit_Password($id, $newpassword)
    {
        $this->db->set('password', $newpassword);
        $this->db->where('id_admin', $id);
        $this->db->update('admin');
    }

    public function image_Profile()
    {
        $image = $this->upload->data('file_name');
        $this->db->set('foto', $image);
    }

    public function edit_Data()
    {
        $id = $this->input->post('idadmin');
        $name = $this->input->post('name');

        $this->db->set('nama', $name);
        $this->db->where('id_admin', $id);
        $this->db->update('admin');
    }

    // Pengguna

    public function get_AllAdmin()
    {
        return $this->db->get('admin')->result_array();
    }

    public function delete_Pengguna($id)
    {

        // Hapus data dari tabel admin
        $this->db->where('id_admin', $id);
        $this->db->delete('admin');
    }


    public function get_ById($id)
    {
        return $this->db->get_where('admin', ['id_admin' => $id])->row_array();
    }

    public function insert_Pengguna()
    {
        $data = [
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => md5($this->input->post('password')),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'foto' => 'default.png',
            'akses' => 'Penilai'
        ];

        $this->db->insert('admin', $data);
    }

    public function edit_Pengguna($id)
    {
        $akses = $this->input->post('akses', true);
        $this->db->set('akses', $akses);
        $this->db->where('id_admin', $id);
        $this->db->update('admin');
    }

    public function get_Akses()
    {
        $this->db->distinct();
        $this->db->select('akses');
        $this->db->from('admin');
        return $this->db->get()->result_array();

        //return $this->db->query('SELECT DISTINCT `akses` FROM `admin`')->result_array();
    }

    public function reset()
    {
        $id = $this->input->post('idadmin', true);
        $password = md5($this->input->post('newpassword', true));

        $this->db->set('password', $password);
        $this->db->where('id_admin', $id);
        $this->db->update('admin');
    }

    public function getNilaiKaryawan($tahun)
    {
        // Mengambil data nilai karyawan dari tabel nilai dan melakukan join dengan tabel karyawan
        $this->db->select('karyawan.nama_karyawan, penilaian.rank, alternatif.nama_alternatif');
        $this->db->from('nilai');
        $this->db->join('penilaian', 'penilaian.id_nilai = nilai.id_nilai');
        $this->db->join('alternatif', 'alternatif.id_alternatif = penilaian.id_alternatif');
        $this->db->join('karyawan', 'karyawan.id_karyawan = nilai.id_karyawan');
        $this->db->where('nilai.id_periode', $tahun);
        $this->db->group_by('nilai.id_karyawan');
        $this->db->order_by('penilaian.rank', 'ASC'); // Urutan ASC agar peringkat terbaik berada di atas
        $query = $this->db->get();
        $result = $query->result_array();

        // Menghitung peringkat (rank)
        $rank = 1;
        foreach ($result as &$row) {
            $row['rank'] = $rank++;
        }

        return $result;
    }

    public function getRankKaryawan($tahun)
    {
        $this->db->select('karyawan.nama_karyawan, penilaian.nilai_akhir, alternatif.nama_alternatif');
        $this->db->select('RANK() OVER (ORDER BY penilaian.nilai_akhir DESC) AS peringkat', FALSE);
        $this->db->from('penilaian');
        $this->db->join('nilai', 'nilai.id_nilai = penilaian.id_nilai');
        $this->db->join('karyawan', 'karyawan.id_karyawan = nilai.id_karyawan');
        $this->db->join('alternatif', 'alternatif.id_alternatif = penilaian.id_alternatif');
        $this->db->where('nilai.id_periode', $tahun);
        $this->db->group_by('karyawan.id_karyawan');
        $this->db->order_by('peringkat', 'ASC');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result();
    }
}
