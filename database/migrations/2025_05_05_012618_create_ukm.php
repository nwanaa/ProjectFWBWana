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
        Schema::create('user', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->string('role'); // 'mahasiswa', 'pengurus', 'admin'
        $table->timestamps();
    });

    Schema::create('ukm', function (Blueprint $table) {
        $table->id();
        $table->string('nama_ukm');
        $table->text('deskripsi')->nullable();
        $table->string('logo')->nullable();
        $table->unsignedBigInteger('pengurus_id');
        $table->timestamps();

        $table->foreign('pengurus_id')->references('id')->on('user')->onDelete('cascade');
    });
 Schema::create('anggota_ukm', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('ukm_id');
        $table->string('status')->default('menunggu');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        $table->foreign('ukm_id')->references('id')->on('ukm')->onDelete('cascade');
    });
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
    Schema::create('pendaftaran_kegiatan', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('kegiatan_id');
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
        Schema::dropIfExists('pendaftaran_kegiatan');
        Schema::dropIfExists('kegiatan');
        Schema::dropIfExists('anggota_ukm');
        Schema::dropIfExists('ukm');
        Schema::dropIfExists('user');
        
    }
};
