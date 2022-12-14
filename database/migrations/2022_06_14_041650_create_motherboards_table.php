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
        Schema::create('motherboards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('computer_id')->constrained();
            $table->string('name');
            $table->string('manufacturer');
            $table->string('date'); //updated_at
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('motherboards', function (Blueprint $table) {
            $table->dropForeign(['computer_id']);
        });
        Schema::dropIfExists('motherboards');
    }
};
