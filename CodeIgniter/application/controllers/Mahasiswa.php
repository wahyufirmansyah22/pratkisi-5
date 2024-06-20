<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model Mahasiswa_model
        $this->load->model('Mahasiswa_model');
    }

    public function index() {
        // Panggil method get_mahasiswa dari model untuk mendapatkan semua data mahasiswa
        $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa();
        $this->load->view('mahasiswa_view', $data);
    }

    public function search() {
        // Ambil keyword pencarian dari input form
        $keyword = $this->input->post('keyword');
        // Panggil method search_mahasiswa dari model untuk mencari data mahasiswa berdasarkan keyword
        $data['mahasiswa'] = $this->Mahasiswa_model->search_mahasiswa($keyword);
        $this->load->view('mahasiswa_view', $data);
    }
    public function input_data()
    {
        // Menampilkan view form input data
        $this->load->view('input_data');
    }

    public function tampilkan_data()
    {
        // Atur aturan validasi untuk setiap inputan
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('npm', 'NPM', 'required|numeric');
        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required|exact_length[4]');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|regex_match[/^[A-Z]$/]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[20]');
        $this->form_validation->set_rules('mata_kuliah', 'Mata Kuliah Favorit', 'required');

        // Atur pesan validasi untuk masing-masing aturan
        $this->form_validation->set_message('required', 'Kolom %s wajib diisi.');
        $this->form_validation->set_message('numeric', 'Kolom %s hanya boleh diisi dengan angka.');
        $this->form_validation->set_message('exact_length', 'Kolom %s hanya boleh diisi dengan 4 angka.');
        $this->form_validation->set_message('regex_match', 'Kolom %s hanya boleh diisi dengan 1 huruf besar.');
        $this->form_validation->set_message('min_length', 'Kolom %s harus diisi minimal 20 karakter.');

        // Jalankan proses validasi
        if ($this->form_validation->run() == false) {
            // Jika validasi gagal, kembali ke halaman form input data
            $this->load->view('input_data');
        } else {
            // Jika validasi berhasil, ambil data dari form
            $data['nama'] = $this->input->post('nama');
            $data['npm'] = $this->input->post('npm');
            $data['angkatan'] = $this->input->post('angkatan');
            $data['kelas'] = $this->input->post('kelas');
            $data['alamat'] = $this->input->post('alamat');
            $data['mata_kuliah'] = $this->input->post('mata_kuliah');

            // Tampilkan data yang telah diambil ke halaman hasil_data
            $this->load->view('hasil_data', $data);
        }
    }

    public function data_mahasiswa() {  
        $data['mahasiswa'] = $this->Mahasiswa_model->get_all_mahasiswa();  
        $this->load->view('list_mahasiswa', $data); 
    }  
        
    public function search_mahasiswa() {  
        $keyword = $this->input->post('keyword'); 
        $data['mahasiswa'] = $this->Mahasiswa_model->search_data_mahasiswa($keyword);  
        $this->load->view('list_mahasiswa', $data); 
    }

    public function list_mahasiswa() {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_all_mahasiswa();  
        $this->load->view('list_mahasiswa', $data);
    }
}
?>
