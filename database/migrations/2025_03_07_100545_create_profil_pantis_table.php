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
        Schema::create('profil_pantis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_panti');
            $table->text('deskripsi');
            $table->string('alamat');
            $table->string('kontak');
            $table->string('email')->unique();
            $table->string('jam_buka');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_pantis');
    }
};
