<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
			$table->foreignId('computer_id')->constrained();
			$table->string('employee_surname');
			$table->string('employee_name');
			$table->string('employee_patronymic');
			$table->string('fault_description');
			$table->string('request_date_for_repair');
			$table->string('completion_date_of_repair');
            $table->string('date'); //updated_at
            $table->softDeletes(); //deleted_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('repairs', function (Blueprint $table) {
            $table->dropForeign(['computer_id']);
        });
        Schema::dropIfExists('repairs');
    }
};
