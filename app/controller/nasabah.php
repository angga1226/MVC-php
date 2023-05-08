<?php 

class Nasabah extends Controller {
    public function index() {
        $data['judul'] = 'Daftar nasabah';
        $data['nas'] = $this->model('Nasabah_model')->getAllNasabah();
        $this->view('templates/header', $data);
        $this->view('nasabah/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = 'Detail nasabah';
        $data['nas'] = $this->model('Nasabah_model')->getNasabahById($id);
        $this->view('templates/header', $data);
        $this->view('nasabah/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('Nasabah_model')->tambahDataNasabah($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/nasabah');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/nasabah');
            exit;
        }
    }

    public function delete($id)
    {
        if($this->model('Nasabah_model')->hapusDataNasabah($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/nasabah');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/nasabah');
            exit;
        }
    }

    public function getubah() {
        echo json_encode($this->model('Nasabah_model')->getNasabahById($_POST['id']));
         
    }

    public function ubah()
    {
        if($this->model('Nasabah_model')->ubahDataNasabah($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah','success');
            header('Location: '. BASEURL . '/nasabah');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: '. BASEURL . '/nasabah');
            exit;
        }
    }

	public function cari() {
		$data['judul'] = 'Daftar nasabah';
        $data['nas'] = $this->model('Nasabah_model')->cariNasabah();
        $this->view('templates/header', $data);
        $this->view('nasabah/index', $data);
        $this->view('templates/footer');
	}
}

?>
