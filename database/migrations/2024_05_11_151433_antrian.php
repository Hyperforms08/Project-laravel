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
        Schema::create('Antrian', function (Blueprint $table) {
            $table->id();
            $table->string('No_Antrian', 45);
            $table->enum('Status_Antrian', ['S', 'B']);
            $table->unsignedBigInteger('dokter_id');
            $table->unsignedBigInteger('pasien_id');
            $table->foreign('dokter_id')->references('id')->on('dokter');
            $table->foreign('pasien_id')->references('id')->on('pasien');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
