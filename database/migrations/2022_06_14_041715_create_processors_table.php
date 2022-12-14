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
        Schema::create('processors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('computer_id')->constrained();
            $table->string('name');
            $table->string('manufacturer');
            $table->string('description');
            $table->string('number_of_cores');
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
        Schema::table('processors', function (Blueprint $table) {
           $table->dropForeign(['computer_id']);
        });

        Schema::dropIfExists('processors');

    }
};
