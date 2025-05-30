<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //foreign key
    public function up(): void
    {
        Schema::create('ukms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ukm');
            $table->text('deskripsi');
            $table->unsignedBigInteger('pengurus_id'); // FK ke users
            $table->timestamps();
        
            $table->foreign('pengurus_id')->references('id')->on('users')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ukms'); 
    }
};
