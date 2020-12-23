<?php

class DataTamu extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Tabel Buku Tamu";
        $data['tamu'] = $this->BukuTamuModel->get_data('data_tamu')->result();

        $this->load->view('_templates/header');
        $this->load->view('_templates/sidebar');
        $this->load->view('dataTamu', $data);
        $this->load->view('_templates/footer');
    }

    public function tambahData()
    {
        $nik_input = $this->input->post('nik');
        $query = $this->db->query("SELECT nik FROM data_tamu");

        foreach ($query->result() as $row) {
            echo $row->nik;
            echo $nik_input;

            if ($nik_input == $row->nik)
                echo "Orang ini sudah pernah mampir";

            // Buat kondisional, jika nik ketemu yang sama maka load array data berisi
            // data pemilik nik yang bersangkutan, redirect ke halaman tambah
            // (if possible langsung redirect ke modal) kalau misal gak ketemu
            // langsung redirect, data passing hanya nik baru saja. form kosongan.
        }
    }
}
