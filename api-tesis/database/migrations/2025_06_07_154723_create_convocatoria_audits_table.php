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
        Schema::create('convocatoria_audits', function (Blueprint $table) {
    $table->id();
    $table->foreignId('convocatoria_id')->constrained('convocatorias');
    $table->foreignId('user_id')->constrained('users');
    $table->string('accion');
    $table->json('cambios')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('convocatoria_audits');
    }
};
