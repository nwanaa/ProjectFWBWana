<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kegiatan', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('ukm_id');
        $table->string('nama_kegiatan');
        $table->text('deskripsi')->nullable();
        $table->date('tanggal');
        $table->string('lokasi');
        $table->timestamps();

        $table->foreign('ukm_id')->references('id')->on('ukm')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_kegiatan');
    }
};
