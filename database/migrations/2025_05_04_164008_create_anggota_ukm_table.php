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
        Schema::create('anggota_ukm', function (Blueprint $table) {
        $table->id();
        $table->integer('user_id');
        $table->integer('ukm_id');
        $table->string('status')->default('menunggu');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        $table->foreign('ukm_id')->references('id')->on('ukm')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_ukm');
    }
};
