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
        Schema::create('monitors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('computer_id')->constrained();
            $table->string('name');
            $table->string('manufacturer');
            $table->string('refresh_rate');
            $table->string('max_resolution');
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
        Schema::table('monitors', function (Blueprint $table) {
            $table->dropForeign(['computer_id']);
        });

        Schema::dropIfExists('monitors');
    }
};
