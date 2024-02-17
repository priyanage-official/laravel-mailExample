<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->nullable();
            $table->string('employee_name')->nullable();
            $table->integer('age')->nullable();
            $table->date('joining_date')->nullable();
            $table->float('salary')->nullable();
            $table->float('bonus')->nullable();
            $table->float('employe_medical_claims')->default(0);
            $table->float('allowences')->default(0);
            $table->float('leave_payments')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
