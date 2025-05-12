<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('home_sections', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // contoh: 'heroes', 'kegiatan', 'donasi'
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sections');
    }
};
