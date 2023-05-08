<?php 

class Nasabah_model {
	private $table = 'nasabah';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllNasabah() {
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getNasabahById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahDataNasabah($data)
	{
		$query = "INSERT INTO nasabah (nama, no, email, KPR) VALUES (:nama, :no, :email, :KPR)";
	
		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('no', $data['no']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('KPR', $data['KPR']);
	
		$this->db->execute();
	
		return $this->db->rowCount();
	}

	public function hapusDataNasabah($id)
	{
		$query = "DELETE FROM nasabah WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id', $id);
	
		$this->db->execute();
		return $this->db->rowCount();	
	}

	public function ubahDataNasabah($data)
	{
	    $query = "UPDATE nasabah SET nama= :nama, no=:no, email= :email, KPR= :KPR WHERE id = :id";
	    
	    $this->db->query($query);
	    $this->db->bind('nama', $data['nama']);
	    $this->db->bind('no', $data['no']);
	    $this->db->bind('email', $data['email']);
	    $this->db->bind('KPR', $data['KPR']);
		$this->db->bind('id', $data['id']);
	    
	    $this->db->execute();
	    
	    return $this->db->rowCount();
	}

	public function cariNasabah() {
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM nasabah WHERE nama LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");
		return $this->db->resultSet();
	}

}
