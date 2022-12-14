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
        Schema::create('data_storages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('computer_id')->constrained();
            $table->string('serial_number');
            $table->string('model_id');
            $table->string('version');
            $table->string('interface_type');
            $table->string('size');
            $table->string('logical_disk');
            $table->string('file_system');
            $table->string('logical_disk_size');
            $table->string('logical_disk_free_space');
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
        Schema::table('data_storages', function (Blueprint $table) {
            $table->dropForeign(['computer_id']);
        });
        Schema::dropIfExists('data_storages');
    }
};
