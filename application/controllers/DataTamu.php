<?php

class DataTamu extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Tabel Buku Tamu";
        $data['tamu'] = $this->db->query("SELECT * FROM data_tamu ORDER BY id DESC")->result();

        $this->load->view('_templates/header', $data);
        $this->load->view('_templates/sidebar');
        $this->load->view('dataTamu', $data);
        $this->load->view('_templates/footer');
    }

    public function tambahData()
    {
        $nik_input = $this->input->post('nik');
        $query = $this->db->query("SELECT nik FROM data_tamu");
        $data['title'] = "Tambah Data Tamu Baru";
        $data['pegawai'] = $this->BukuTamuModel->get_data('data_pegawai')->result();

        $this->load->view('_templates/header', $data);
        $this->load->view('_templates/sidebar');

        $flag = 0;
        foreach ($query->result() as $row) {
            if ($nik_input == $row->nik) {
                $flag = 1;
                break;
            } else {
                $flag = 0;
            }
            // Buat kondisional, jika nik ketemu yang sama maka load array data berisi
            // data pemilik nik yang bersangkutan, redirect ke halaman tambah
            // (if possible langsung redirect ke modal) kalau misal gak ketemu
            // langsung redirect, data passing hanya nik baru saja. form kosongan.
        }

        if ($flag != 1) {
            $data['nik'] = $nik_input;
            $this->load->view('tambahDataBaru', $data);
        } else {
            $data['tamu'] = $this->db->query("SELECT * FROM data_tamu WHERE nik = $nik_input")->result();
            $this->load->view('tambahData', $data);
        }

        $this->load->view('_templates/footer');
    }

    public function tambahDataBaru_action()
    {
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $pekerjaan = $this->input->post('pekerjaan');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $keperluan = $this->input->post('keperluan');
        $foto = $_FILES['foto']['name'];
        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/assets/img';
            $config['allowed_types'] = 'jpg|jpeg|png|tiff';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                echo "Foto Gagal diupload!";
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nik' => $nik,
            'nama' => $nama,
            'pekerjaan' => $pekerjaan,
            'alamat' => $alamat,
            'no_telp' => $no_telp,
            'keperluan' => $keperluan,
            'foto' => $foto
        );

        $this->BukuTamuModel->insert_data($data, 'data_tamu');
        redirect('DataTamu');
    }
}
