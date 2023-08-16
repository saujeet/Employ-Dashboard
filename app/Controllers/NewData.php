<?php 

namespace App\Controllers;
use \CodeIgniter\Controller;
use App\Models\UserModel;

class NewData extends Controller
{

	// public $userModel = new UserModel;
	// public function __construct()
	// {
	// 	$this->userModel = App\Models\UserModel;
	// }


	public function index(){

		$userModel = new UserModel;
	
		$data['subjects'] = $userModel->getData();

		return view('newdataview', $data);

		/*
		$parser = \Config\Services::parser();

		$parser -> setData($data) -> render('newdataview');
		*/
		// echo view('newdataview', $data);


		// print_r($data['subjects']);
	}

	public function usersList()
	{
		$userModel = new UserModel;
		$data['users'] = $userModel->getUserList();
		return view('userlist_view', $data);
	}
}