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
        Schema::create('bios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('computer_id')->constrained();
            $table->string('description');
            $table->string('manufacturer');
            $table->string('version');
            $table->string('smbios_version');
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
        Schema::table('bios', function (Blueprint $table) {
            $table->dropForeign(['computer_id']);
        });
        Schema::dropIfExists('bios');
    }
};
