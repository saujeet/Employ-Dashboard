<?php

namespace App\Models;

use \CodeIgniter\Model;

class EmployeeDataModel extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'designation'
    ];
}

?>