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
        $table->string('logo')->nullable();
        $table->integer('pengurus_id'); 
        $table->timestamps();

        $table->foreign('pengurus_id')->references('id')->on('user')->onDelete('cascade'); 
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ukm'); 
    }
};
