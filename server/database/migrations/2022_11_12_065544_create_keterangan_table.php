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
                ->constrained('bidang_pemeriksaan');
            $table->foreignId('parameter_id')
                ->constrained('parameter_pemeriksaan');
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
        Schema::dropIfExists('keterangan');
    }
};
