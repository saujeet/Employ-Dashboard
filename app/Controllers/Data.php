<?php

namespace App\Controllers;
use \CodeIgniter\Controller;
use \CodeIgniter\View\Table;

class Data extends Controller{
	public function index()
	{
		$table = new Table();

		// Method 1
		$data = [
			['Name', 'City', 'State'],
			['Sam', 'Thane', 'MH'],
			['John', 'Mumbai', 'MH'],
			['Tim', 'Pune', 'MH'],
		];

		$template = [
		    'table_open' => '<table border="5" cellpadding="10" cellspacing="10">',
		];

		$table->setTemplate($template);

		$records['users'] = $table->generate($data);

		// Method 2

		/* $table->setHeading(['Name','City','State']);
		$table->addRow(['Sam','Thane','MH']);
		$table->addRow(['Tim','Pune','MH']);
		$table->addRow(['Name','Mumbai','MH']);


		$records['users'] = $table->generate();
		*/

		echo view('dataview', $records);
	}
}