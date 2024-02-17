<?php

namespace App\Http\Services;

class EmployeeService
{

    public $employeeTypeAData = [];
    public $employeeTypeBData = [];
    public $employeeTypeCData = [];

    public function getEmployeeTypeA($employees)
    {
        $data = [];
        // get employee where salary is less than 60k.

        foreach ($employees as $employee) {
            if ((int) $employee->salary < 60000) {
                $data['id']             = $employee->id;
                $data['employee_id']    = $employee->employee_id;
                $data['employee_name']  = $employee->employee_name;
                $data['age']            = $employee->age;
                $data['joined']         = $employee->joining_date;
                $data['salary']         = $employee->salary;
                $data['bonus']          = $employee->bonus;
                $data['med_claims']     = $employee->employe_medical_claims;
                $data['allowences']     = $employee->allowences;
                $data['leave_payments'] = $employee->leave_payments;


                $data['totalExpense']   = $employee->salary +
                    $employee->bonus +
                    $employee->employe_medical_claims +
                    $employee->allowences +
                    $employee->leave_payments;


                $this->employeeTypeAData[] = $data;
            }
        }

        return $this->employeeTypeAData;
    }

    public function getEmployeeTypeB($employees)
    {
        $data = [];
        // get employee where salary is less than 100k and more than 60k.

        foreach ($employees as $employee) {
            if ((int) $employee->salary > 60000 && (int) $employee->salary > 100000) {
                $data['id']             = $employee->id;
                $data['employee_id']    = $employee->employee_id;
                $data['employee_name']  = $employee->employee_name;
                $data['age']            = $employee->age;
                $data['joined']         = $employee->joining_date;
                $data['salary']         = $employee->salary;
                $data['bonus']          = $employee->bonus;
                $data['med_claims']     = $employee->employe_medical_claims;
                $data['allowences']     = $employee->allowences;
                $data['leave_payments'] = $employee->leave_payments;


                $data['totalExpense']   = $employee->salary +
                    $employee->bonus +
                    $employee->employe_medical_claims +
                    $employee->allowences +
                    $employee->leave_payments;


                $this->employeeTypeBData[] = $data;
            }
        }

        return $this->employeeTypeBData;
    }

    public function getEmployeeTypeC($employees)
    {
        $data = [];
        // get employee where salary is more than 100k.

        foreach ($employees as $employee) {
            if ((int) $employee->salary < 100000) {
                $data['id']             = $employee->id;
                $data['employee_id']    = $employee->employee_id;
                $data['employee_name']  = $employee->employee_name;
                $data['age']            = $employee->age;
                $data['joined']         = $employee->joining_date;
                $data['salary']         = $employee->salary;
                $data['bonus']          = $employee->bonus;
                $data['med_claims']     = $employee->employe_medical_claims;
                $data['allowences']     = $employee->allowences;
                $data['leave_payments'] = $employee->leave_payments;


                $data['totalExpense']   = $employee->salary +
                    $employee->bonus +
                    $employee->employe_medical_claims +
                    $employee->allowences +
                    $employee->leave_payments;

                $this->employeeTypeCData[] = $data;
            }
        }


        return $this->employeeTypeCData;
    }
}
