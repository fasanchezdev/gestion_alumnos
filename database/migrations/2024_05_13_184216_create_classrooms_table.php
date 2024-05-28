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
        Schema::create('classrooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curso_id')
            ->constrained('cursos')
            ->cascadeOnUpdate()
            ->nulleable();
            $table->foreignId('divition_id')
            ->constrained('divitions')
            ->cascadeOnUpdate()
            ->nulleable();
            $table->foreignId('teacher_id')
            ->constrained('teachers')
            ->cascadeOnUpdate()
            ->nulleable();
            $table->foreignId('subject_id')
            ->constrained('subjects')
            ->cascadeOnUpdate()
            ->nulleable();
            $table->time('start')
            ->nulleable();
            $table->time('end')
            ->nulleable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classrooms');
    }
};
