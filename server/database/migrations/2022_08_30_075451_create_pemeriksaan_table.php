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
        // Schema::create('pemeriksaan', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreign('pasien_id')->references('id')->on('pasien');
        //     $table->foreign('parameter_id')->references('id')->on('parameter');
        //     $table->foreign('status_id')->references('id')->on('status');
        //     $table->text('hasil');
        //     $table->text('kesan');
        //     $table->text('catatan');
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
        // Schema::dropIfExists('pemeriksaan');
    }
};