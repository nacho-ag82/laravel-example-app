<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This method is used to create the 'titulos' table.
     */
    public function up()
    {
        // Create the 'titulos' table with the specified columns and constraints
        Schema::create('titulos', function (Blueprint $table) {
            $table->id(); // Primary key column
            $table->integer('anno'); // Integer column for the year
            $table->foreignId('tenista_id')->constrained(); // Foreign key column referencing 'tenista_id'
            $table->foreignId('torneo_id')->constrained(); // Foreign key column referencing 'torneo_id'
            $table->timestamps(); // Timestamps columns for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     * This method is used to drop the 'titulos' table.
     */
    public function down(): void
    {
        // Drop the 'titulos' table if it exists
        Schema::dropIfExists('titulos');
    }
};