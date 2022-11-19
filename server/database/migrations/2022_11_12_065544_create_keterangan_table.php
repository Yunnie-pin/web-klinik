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
        Schema::create('keterangan_pemeriksaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemeriksaan_id')
                ->constrained('pemeriksaan');
            $table->foreignId('bidang_id')
                ->nullable()
                ->constrained('bidang_pemeriksaan');
            $table->foreignId('parameter_id')
                ->nullable()
                ->constrained('parameter_pemeriksaan');
            $table->foreignId('metode_id')
                ->nullable()
                ->constrained('metode_pemeriksaan');
            $table->text('hasil')->nullable();
            $table->text('kesan')->nullable();
            $table->text('catatan')->nullable();
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
        Schema::dropIfExists('keterangan');
    }
};
