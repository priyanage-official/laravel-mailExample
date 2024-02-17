<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $max = 100;
        
        for ($i = 0; $i <= $max; $i++) {
            User::factory()->create();
        }
    }
}
