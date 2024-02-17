<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Services\EmployeeService;

class EmployeesController extends Controller
{
    //Main page view
    public function index()
    {
        return view('index');
    }

    public function home()
    {
        try {

            $data = [];

            if (auth()->check()) {
                $employees =  Employee::all();


                // if (empty($employees->toArray())) {
                //     return [];
                // }

                $employees = Employee::all();

                // Employees where salary is less than 60k. Type A
                $employeeTypeA = (new EmployeeService)->getEmployeeTypeA($employees);

                // Employees where salary is more than 60k and less than 100k. Type B
                $employeeTypeB = (new EmployeeService)->getEmployeeTypeB($employees);

                // Employees where salary is more than  100k. Type C
                $employeeTypeC = (new EmployeeService)->getEmployeeTypeC($employees);

                $data = [
                    'typeA' => $employeeTypeA,
                    'typeB' => $employeeTypeB,
                    'typeC' => $employeeTypeC,
                ];

                return view('home', $data);
            }

            return $data;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
