<?php 

namespace App\Controllers;
use \CodeIgniter\Controller;

class Blog extends Controller{
	public function index()
	{
		$data = [
			"page_title" => "CodeIgniter 4",
			"page_heading" => "CodeIgniter 4 Views",
			"subjects" => ["HTML", "CSS", "Bootstrap", "JavaScript", "AJAX", "JSON", "React"],
		];

		echo view("myview",$data);
	}
}
