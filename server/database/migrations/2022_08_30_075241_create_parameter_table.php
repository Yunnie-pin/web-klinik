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
        Schema::create('parameter_pemeriksaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bidang_id');
            $table->string('parameter');
            $table->string('nilai_rujukan');
            $table->unsignedBigInteger('metode_id');
            $table->string('satuan');
            $table->double('harga');
            $table->timestamps();


            $table->foreign('bidang_id')->references('id')->on('bidang_pemeriksaan');
            $table->foreign('metode_id')->references('id')->on('metode_pemeriksaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parameter_pemeriksaan');
    }
};
