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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->string('name')->nullable();  // Naam van de categorie (bijv. 'Crypto', 'Aandelen', 'Onroerend Goed')
            $table->text('description')->nullable();  // Optionele omschrijving van de categorie
            $table->timestamps();  // Creëert 'created_at' en 'updated_at' kolommen
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
