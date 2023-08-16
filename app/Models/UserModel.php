<?php
namespace App\Models;
use \CodeIgniter\Model;
class UserModel extends Model
{
	public function getData()
	{
		$subjects = [
	['subject' => 'HTML5', 'abbr' => 'Body 1'],
	['subject' => 'CSS3', 'abbr' => 'Body 2'],
	['subject' => 'JSON', 'abbr' => 'Body 3'],
	['subject' => 'AJAX', 'abbr' => 'Body 4'],
	];
		return $subjects;
	}
	public function getUserList()
	{
		$db = \Config\Database::connect('seconddb');
		$query = $db->query('SELECT id,username,email,mobile FROM users');
		$result = $query->getResult();
		if(count($result)>0){
			return $result;
		}
		else
		{
			return false;
		}
	}
}