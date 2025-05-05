<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //foreign key
    public function up(): void
    {
         Schema::create('ukm', function (Blueprint $table) {
        $table->id();
        $table->string('nama_ukm');
        $table->text('deskripsi')->nullable(); //kolom di database bisa tidak diisi atau nilainya null
        $table->string('logo')->nullable();
        $table->integer('pengurus_id'); 
        $table->timestamps();

        $table->foreign('pengurus_id')->references('id')->on('user')->onDelete('cascade'); // untuk menghapus otomatis
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ukm'); //digunakan untuk menghapus tabel ukm jika tabel tersebut ada, 
        //agar tidak menyebabkan error saat rollback atau saat setup ulang database.
    }
};
