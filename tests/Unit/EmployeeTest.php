<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;

use App\Http\Controllers\EmployeesController;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_if_user_not_logged_in()
    {
        $returnedValues = (new EmployeesController)->home();

        $this->assertEmpty($returnedValues);
    }
}
