<?php

namespace App\Controllers;

use \CodeIgniter\Controller;

class Test extends Controller
{

	public $parser;
	public function __construct()
	{
		$this->parser = \Config\Services::parser();
	}

	public function index()
	{
		$data = [
			"page_title" => "Homepage",
			"page_heading" => "Welcome To Homepage",
			'subjects_list' => [
				['subject' => 'HTML5', 'abbr' => 'Body 1'],
				['subject' => 'CSS3', 'abbr' => 'Body 2'],
				['subject' => 'JSON', 'abbr' => 'Body 3'],
				['subject' => 'AJAX', 'abbr' => 'Body 4'],
			],
			"status" => true,
		];

		// Render through Parser Object =>

		return $this->parser->setData($data)->render("testview");

		// OR
		/*
			  $parser -> setData($data);
			  return $parser -> render("homepageview");
			  */

		// Normal Method 
		// echo view('homepageview', $data);
	}
	public function viewFilters()
	{
		$data = [
			"page_title" => "Homepage",
			"page_heading" => "Welcome To Homepage",
			"date" => "05-10-2022",
			"price" => "5000",
			"mobile" => "505470200",
		];

		return $this->parser->setData($data)->render("filterview");

	}
}

?>