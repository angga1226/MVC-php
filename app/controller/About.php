<?php 


class About extends Controller {
	public function index($nama = "angga", $umur = 26, $inpo = "hengker") {
		$data['nama'] = $nama;
		$data['umur'] = $umur;
		$data['inpo'] = $inpo;
		$data['judul'] = 'About Me'; 
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}
	public function page()
	{
		$data['judul'] = 'Pages';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}




 ?>