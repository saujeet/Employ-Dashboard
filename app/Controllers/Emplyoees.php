<?php
namespace App\Controllers;
use \CodeIgniter\Controller;

class Emplyoees extends Controller
{
	public function index()
	{
		$db1 = \Config\Database::connect();
		$db2 = \Config\Database::connect("seconddb");
		$query1 = $db1 -> query("SELECT * FROM emplyoee_details");
		$result1 = $query1->getResult();

		echo "<pre>";
		print_r($result1);

		//------------------------------

		$query2 = $db2 -> query("SELECT username, email, mobile from users");
		$result2 = $query2->getResult();
		print_r($result2);
	}
}