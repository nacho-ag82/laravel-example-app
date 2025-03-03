<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This method is used to create the 'torneos' table with the specified columns.
     */
    public function up()
    {   
        // Create the 'torneos' table
        Schema::create('torneos', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('nombre'); // Column for the tournament name
            $table->string('ciudad'); // Column for the city
            $table->string('superficie'); // Column for the surface type
            $table->timestamps(); // Columns for created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     * This method is used to drop the 'torneos' table if it exists.
     */
    public function down(): void
    {
        // Drop the 'torneos' table
        Schema::dropIfExists('torneos');
    }
};
