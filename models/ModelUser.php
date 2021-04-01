<?php
//sebelum query, load dulu library database-nya
include_once("libraries/Database.php");

class Model {
	function __construct()
	{
		$this->dbh = Database::getInstance();
	}


	function simpanData($username,$password,$nama,$email,$kotaasal)
	{
		$rs = $this->dbh->query("INSERT INTO user (username,password,nama,email,kotaasal) VALUES ('".$username."','".$password."','".$nama."','".$email."','".$kotaasal."')");
	}

	function lihatData()
	{

		$rs = $this->dbh->query("SELECT * FROM user");
		return $rs;
	}

	function lihatDataDetail($username)
	{

		$rs = $this->dbh->query("SELECT * FROM user WHERE username='".$username."'");
		return $rs->fetch();// kalau hasil query hanya satu, gunakan method fetch() bawaan PDO
	}
	
	
}

?>