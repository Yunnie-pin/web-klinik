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
            $table->foreignId('bidang_id')->constrained('bidang_pemeriksaan');
            $table->string('parameter');
            $table->string('nilai_rujukan');
            $table->foreignId('metode_id')->constrained('metode_pemeriksaan');
            $table->string('satuan');
            $table->double('harga');
            $table->timestamps();
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
