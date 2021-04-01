<?php
//sebelum query, load dulu library database-nya
include_once("libraries/DatabaseShop.php");

class Model {
	function __construct()
	{
		$this->dbh = Database::getInstance();
	}


	function simpanData($thing)
	{
		$rs = $this->dbh->query("INSERT INTO cart (thing) VALUES ('".$thing."')");
	}

	function lihatData()
	{

		$rs = $this->dbh->query("SELECT * FROM cart");
		return $rs;
	}

	function lihatDataDetail($no)
	{

		$rs = $this->dbh->query("SELECT * FROM cart WHERE no=".$no);
		return $rs->fetch();// kalau hasil query hanya satu, gunakan method fetch() bawaan PDO
	}
	
	
}

?>