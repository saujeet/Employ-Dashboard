<?php
namespace App\Controllers;

use \CodeIgniter\Controller;
use App\Models\EmployeeDataModel;

class EmployeeData extends Controller
{
    public $employee;

    public function __construct()
    {
        $this->employee = new EmployeeDataModel();
    }

    public function index()
    {

        $data['employee'] = $this->employee->findAll();
        return view('employee/employee_page', $data);
    }

    public function create()
    {
        return view('employee/create');
    }

    public function store()
    {
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'designation' => $this->request->getPost('designation'),
        ];
        $this->employee->save($data);
        return redirect()->to(base_url('employeedata'))->with('status', 'Employee Added Successfully');
    }

    public function edit($id)
    {
        $data['employee'] = $this->employee->find($id);
        return view('employee/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'designation' => $this->request->getPost('designation'),
        ];
        $this->employee->update($id, $data);
        return redirect()->to(base_url('employeedata'))->with('status', 'Employee Updated Successfully');
    }

    public function delete($id)
    {
        $this->employee->delete($id);
        return redirect()->to(base_url('employeedata'))->with('status', 'Employee Deleted Successfully');
    }
}

?>