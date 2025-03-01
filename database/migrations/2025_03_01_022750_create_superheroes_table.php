<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Nombre del superhéroe
            $table->string('real_name')->nullable(); // Nombre real
            $table->foreignId('gender_id')->constrained('genders')->onDelete('cascade');
            $table->foreignId('universe_id')->constrained('universes')->onDelete('cascade');
            $table->text('powers')->nullable(); // Lista de poderes
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('superheroes');
    }
};
