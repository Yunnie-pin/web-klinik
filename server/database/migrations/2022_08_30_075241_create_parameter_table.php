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
        // Schema::create('parameter', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreign('bidang_id')->references('id')->on('bidang_parameter');
        //     $table->string('parameter');
        //     $table->string('nilai_rujukan');
        //     $table->foreign('metode_id')->references('id')->on('metode');
        //     $table->string('satuan');
        //     $table->double('harga');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('parameter');
    }
};