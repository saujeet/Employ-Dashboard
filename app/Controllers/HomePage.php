<?php

namespace App\Controllers;
use \CodeIgniter\Controller;

class HomePage extends Controller{
	public function index()
	{

		$parser = \Config\Services::parser();

		$data = [
			"page_title" => "Homepage",
			"page_heading" => "Welcome To Homepage",
		];

		// Render through Parser Object =>

		return $parser -> setData($data) -> render("homepageview");

		// OR
		/*
		$parser -> setData($data);
		return $parser -> render("homepageview");
		*/

		// Normal Method 
		// echo view('homepageview', $data);
	}
}

?>
