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
            $table->foreignId('pasien_id')
                ->constrained('pasien');
            $table->foreignId('bidang_pemeriksaan_id')
                ->constrained('bidang_pemeriksaan');
            $table->foreignId('parameter_pemeriksaan_id')
                ->constrained('parameter_pemeriksaan');
            $table->foreignId('status_id')
                ->constrained('status');
            $table->foreignId('validator_pemeriksaan_id')
                ->constrained('validator_pemeriksaan');
            $table->text('hasil');
            $table->text('kesan');
            $table->text('catatan');
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
        Schema::dropIfExists('pemeriksaan');
    }
};
