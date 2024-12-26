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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('slug')->nullable();
            $table->longText('content');
            $table->string('pics_filename')->nullable()->default('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiQE-yyTkrk89W3_sPDMEioPGVTEneDi05kg&s');
            $table->string('pics_path')->nullable()->default('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiQE-yyTkrk89W3_sPDMEioPGVTEneDi05kg&s');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
