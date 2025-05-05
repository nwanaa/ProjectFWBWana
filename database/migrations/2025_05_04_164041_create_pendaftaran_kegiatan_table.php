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
         Schema::create('pendaftaran_kegiatan', function (Blueprint $table) {
        $table->id();
        $table->integer('user_id');
        $table->integer('kegiatan_id');
        $table->string('status')->default('terdaftar');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        $table->foreign('kegiatan_id')->references('id')->on('kegiatan')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_pendaftaran_kegiatan');
    }
};
