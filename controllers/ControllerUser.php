<?php
include_once("models/ModelUser.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function index()
	{
		require_once('views/Userindex.php');
	}

	function save()
	{
		$username =  $_POST['username'];
		$password = $_POST['password'];
		$nama =  $_POST['nama'];
		$email = $_POST['email'];
		$kotaasal =  $_POST['kotaasal'];

		//penyimpanan data ke model
		$this->model->simpanData($username,$password,$nama,$email,$kotaasal);
		$this->index(); //controller dikembalikan ke method index setelah selesai mengakses method ini.
	}

	function show_data()
	{
		if(!isset($_GET['i']))
		{
			//jika tidak ada parameter id yang dikirim, maka akan menampilkan semua data yang ada
			$rs = $this->model->lihatData();
			require_once('views/UserList.php');
		}
		else
		{
			//ada parameter id yang dikirim, tampilkan detail dari salah satu data yang dipilih
			$rs = $this->model->lihatDataDetail($_GET['i']);
			require_once('views/UserDetail.php');
		}
	}

}

?>