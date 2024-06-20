<?php
class Barang extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    public function index() {
        $data['records'] = $this->Barang_model->get_data();
        $this->load->view('barang_view', $data);
    }
}
?>
