<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model { 
    

    // Data array data_mahasiswa
    private $data_mahasiswa = [
        ['id' => 1, 'nama' => 'Wahyu Firmansyah', 'npm' => '1412220024', 'angkatan' => '2022', 'kelas' => 'TIF A', 'alamat' => 'Tegalrejo', 'mata_kuliah_favorit' => 'Pemrograman Web'],
        ['id' => 2, 'nama' => 'Rosyidin', 'npm' => '1412220020', 'angkatan' => '2019', 'kelas' => 'TIF B', 'alamat' => 'Merakurak', 'mata_kuliah_favorit' => 'Basis Data'],
        ['id' => 3, 'nama' => 'Putri', 'npm' => '1412130033', 'angkatan' => '2021', 'kelas' => 'TIF C', 'alamat' => 'Kerek', 'mata_kuliah_favorit' => 'Pemrograman Lanjut'],
        ['id' => 4, 'nama' => 'Dian Nugraha', 'npm' => '1412130044', 'angkatan' => '2020', 'kelas' => 'TIF A', 'alamat' => 'Tuban', 'mata_kuliah_favorit' => 'Jaringan Komputer'],
        ['id' => 5, 'nama' => 'Eka Sari', 'npm' => '1412130055', 'angkatan' => '2019', 'kelas' => 'TIF B', 'alamat' => 'Montong', 'mata_kuliah_favorit' => 'Sistem Operasi']
    ]; 

    // Fungsi untuk mendapatkan data mahasiswa
    public function get_mahasiswa(): array { 
        return $this->data_mahasiswa;
    } 

    public function search_mahasiswa(string $keyword): array { 
        $keyword = strtolower($keyword);
        return array_filter($this->data_mahasiswa, function($mahasiswa) use ($keyword) {
            $nama = strtolower($mahasiswa['nama']);
            $npm = strtolower($mahasiswa['npm']);
            $angkatan = strtolower($mahasiswa['angkatan']);
            $kelas = strtolower($mahasiswa['kelas']);
            $alamat = strtolower($mahasiswa['alamat']);
            $mata_kuliah_favorit = strtolower($mahasiswa['mata_kuliah_favorit']);
            return strpos($nama, $keyword) !== false || strpos($npm, $keyword) !== false || strpos($angkatan, $keyword) !== false || strpos($kelas, $keyword) !== false || strpos($alamat, $keyword) !== false || strpos($mata_kuliah_favorit, $keyword) !== false;
        });
    }

        // Method untuk mengambil semua data mahasiswa 
        public function get_all_mahasiswa() {  
            $query = $this->db->get('mahasiswa'); 
            return $query->result_array(); 
        }  
        
        // Method untuk mengambil data mahasiswa sesuai pencarian  
        public function search_data_mahasiswa($keyword) {  
            $this->db->like('nama', $keyword); 
            $query = $this->db->get('mahasiswa'); 
            return $query->result_array(); 
        }
    
    
    
}
?>
