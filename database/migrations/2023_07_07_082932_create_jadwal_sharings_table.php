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
        Schema::create('jadwal_sharings', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->longText('deskripsi');
            $table->string('jadwal');
            $table->string('image');
            $table->foreignId('id_kategori')->constrained('kategoris')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_sharings');
    }
};
