<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('employee_id');
            $table->string('first_name', 20)->nullable();
            $table->string('last_name', 25);
            $table->string('email', 100)->unique();
            $table->string('phone_number', 20)->nullable();
            $table->date('hire_date');

            $table->unsignedBigInteger('job_id');
            $table->decimal('salary', 8, 2);

            $table->unsignedBigInteger('manager_id')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();

            $table->timestamps();

            $table->foreign('job_id')
                ->references('job_id')->on('jobs')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreign('department_id')
                ->references('department_id')->on('departments')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreign('manager_id')
                ->references('employee_id')->on('employees')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};