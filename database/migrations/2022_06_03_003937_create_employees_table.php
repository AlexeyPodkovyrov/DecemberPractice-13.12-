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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
			$table->foreignId('department_id')->constrained();
			$table->string('surname');
			$table->string('name');
			$table->string('patronymic');
			$table->string('birthdate');
			$table->string('gender');
			$table->string('citizenship');
			$table->string('city_of_residence');
			$table->string('home_address');
			$table->string('birthplace');
			$table->string('family_status');
			$table->string('post');
			$table->string('telephone');
			$table->string('INN');
			$table->string('insurance_number');
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
		Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign(['department_id']);
        });
        Schema::dropIfExists('employees');
    }
};
