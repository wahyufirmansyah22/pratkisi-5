<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model'); // Memuat model Barang_model
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'active_menu' => 'home',
            'content' => $this->load->view('beranda/beranda', '', true)
        ];
        $this->load->view('template/template', $data);
    }

    public function data_barang()
    {
        
        $data['title'] = 'Data Barang';
        $data['active_menu'] = 'data_barang';
        $data['barang'] = $this->Barang_model->get_data();
        $data['content'] = $this->load->view('barang/data_barang', $data, true);
        $this->load->view('template/template', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'Tentang',
            'active_menu' => 'tentang',
            'content' => $this->load->view('tentang/tentang', '', true)
        ];
        $this->load->view('template/template', $data);
    }
    public function search_barang()
    {
        $keyword = $this->input->post('keyword');
        
        $data['title'] = 'Data Barang';
        $data['active_menu'] = 'data_barang';
        $data['barang'] = $this->Barang_model->search_barang($keyword); // Mengambil data barang berdasarkan keyword
        $data['keyword'] = $keyword;
        $data['content'] = $this->load->view('barang/data_barang', $data, true); // Mengirim data ke view 
        $this->load->view('template/template', $data);
    }

    // insert data
    public function create() 
    {
        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('kategori_barang', 'Kategori Barang', 'required');
        $this->form_validation->set_rules('deskripsi_barang', 'Deskripsi Barang', 'required');
        $this->form_validation->set_rules('harga_barang', 'Harga Barang', 'required');
        $this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required');
        $this->form_validation->set_rules('stok_barang', 'Stok Barang', 'required');
        $this->form_validation->set_rules('supplier_barang', 'Supplier Barang', 'required');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
        // Tambahkan validasi lainnya sesuai kebutuhan

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' => 'Tambah Barang',
                'active_menu' => 'create',
                'content' => $this->load->view('barang/create', '', true)
            ];
            $this->load->view('template/template', $data);
        } else {
            $data = array(
                'kode_barang' => $this->input->post('kode_barang'),
                'nama_barang' => $this->input->post('nama_barang'),
                'kategori_barang' => $this->input->post('kategori_barang'),
                'deskripsi_barang' => $this->input->post('deskripsi_barang'),
                'harga_barang' => $this->input->post('harga_barang'),
                'harga_jual' => $this->input->post('harga_jual'),
                'stok_barang' => $this->input->post('stok_barang'),
                'supplier_barang' => $this->input->post('supplier_barang'),
                'tanggal_masuk' => $this->input->post('tanggal_masuk'),
                // Tambahkan field lainnya
            );

            if ($this->Barang_model->insert_barang($data)) {
                redirect('beranda/data_barang');
            } else {
                $data = [
                    'title' => 'Tambah Barang',
                    'active_menu' => 'create',
                    'content' => $this->load->view('barang/create', '', true)
                ];
                $this->load->view('template/template', $data);
            }
        }
    }

    
    public function edit($id)
    {
        $data['barang'] = $this->Barang_model->get_barang_by_id($id);
        
        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('kategori_barang', 'Kategori Barang', 'required');
        $this->form_validation->set_rules('deskripsi_barang', 'Deskripsi Barang', 'required');
        $this->form_validation->set_rules('harga_barang', 'Harga Barang', 'required');
        $this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required');
        $this->form_validation->set_rules('stok_barang', 'Stok Barang', 'required');
        $this->form_validation->set_rules('supplier_barang', 'Supplier Barang', 'required');
        $this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Edit Barang';
            $data['active_menu'] = 'edit';
            $data['content'] = $this->load->view('barang/edit', $data, true);
            $this->load->view('template/template', $data);
        } else {
            $update_data = array(
                'kode_barang' => $this->input->post('kode_barang'),
                'nama_barang' => $this->input->post('nama_barang'),
                'kategori_barang' => $this->input->post('kategori_barang'),
                'deskripsi_barang' => $this->input->post('deskripsi_barang'),
                'harga_barang' => $this->input->post('harga_barang'),
                'harga_jual' => $this->input->post('harga_jual'),
                'stok_barang' => $this->input->post('stok_barang'),
                'supplier_barang' => $this->input->post('supplier_barang'),
                'tanggal_masuk' => $this->input->post('tanggal_masuk')
            );

            if ($this->Barang_model->update_barang($id, $update_data)) {
                redirect('beranda/data_barang');
            } else {
                $data['title'] = 'Edit Barang';
                $data['active_menu'] = 'edit';
                $data['content'] = $this->load->view('barang/edit', $data, true);
                $this->load->view('template/template', $data);
            }
        }
    }

    public function delete($id)
    {
        if ($this->Barang_model->delete_barang($id)) {
            redirect('beranda/data_barang');
        } else {
            // Tambahkan pesan error jika penghapusan gagal
            redirect('beranda/data_barang');
        }
    }
}
?>
