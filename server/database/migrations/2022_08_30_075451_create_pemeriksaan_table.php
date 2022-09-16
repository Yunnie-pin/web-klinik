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
        Schema::create('pemeriksaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id');
            $table->unsignedBigInteger('parameter_id');
            $table->unsignedBigInteger('bidang_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('validator_id');
            $table->text('hasil');
            $table->text('kesan');
            $table->text('catatan');
            $table->timestamps();


            $table->foreign('pasien_id')->references('id')->on('pasien');
            $table->foreign('parameter_id')->references('id')->on('parameter_pemeriksaan');
            $table->foreign('bidang_id')->references('id')->on('bidang_pemeriksaan');
            $table->foreign('validator_id')->references('id')->on('validator_pemeriksaan');
            $table->foreign('status_id')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemeriksaan');
    }
};
