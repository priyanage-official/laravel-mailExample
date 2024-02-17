<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $max = 200;
        
        for ($i = 0; $i <= $max; $i++) {
            Employee::factory()->create();
        }

        //Employee::factory(200)->create();
    }
}
