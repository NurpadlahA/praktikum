<?php 
class Mahasiswa extends CI_Controller{
    // buat methood index
    public function index(){
        $this->load->model('Mahasiswa_model','mhs1');

        // buat objeck mahasiswa 1 dan nilainya
        $this->mhs1->id=1;
        $this->mhs1->nim='01111';
        $this->mhs1->nama='Faiz';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.85;

        $this->load->model('Mahasiswa_model','mhs2');

        // objeck mahasiswa 2 dan nilainya
        $this->mhs2->id=2;
        $this->mhs2->nim='01222';
        $this->mhs2->nama='nurul';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.55;

        // siapkan objeck buat kita bikin array
        $list_mhs = [$this->mhs1, $this->mhs2];
        // sipakan objeck untuk kita kirim ke dalam view,dimana datanya diambil dari array
        $data['list_mhs'] = $list_mhs;

        //render data dan kirim data ke dalam view
        $this->load->view('mahasiswa/index', $data);
    }
    // methood Dosen
    // tulis methood dan objek
    public function dosen(){
        $this->load->model('Dosen_model','dsn1');

        // buat objeck model 1 dan nilainya
        $this->dsn1->nidn='011';
        $this->dsn1->pendidikan='S1';

        $this->load->model('Dosen_model','dsn2');

        // objeck model 2 dan nilainya
        $this->dsn2->nidn='012';
        $this->dsn2->pendidikan='S2';

        $this->load->model('Dosen_model','dsn3');

        // objeck model 3 dan nilainya
        $this->dsn3->nidn='013';
        $this->dsn3->pendidikan='S3';

        // siapkan objeck buat kita bikin array
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        // sipakan objeck untuk kita kirim ke dalam view,dimana datanya diambil dari array
        $ata ['list_dsn'] = $list_dsn;

        //render data dan kirim data ke dalam view
        $this->load->view('mahasiswa/dosen', $ata);


    }

    // methood matakuliah
    // tulis mwthood dan objek
    public function matakuliah(){
        $this->load->view("mahasiswa/matakuliah");   
    }
}
?>