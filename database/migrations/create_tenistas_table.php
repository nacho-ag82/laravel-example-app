<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This method is used to create the 'tenistas' table with the specified columns.
     */
    public function up()
    {
        // Create the 'tenistas' table
        Schema::create('tenistas', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nombre'); // Column for the first name
            $table->string('apellidos'); // Column for the last name
            $table->integer('altura'); // Column for the height
            $table->enum('mano', ['Diestro', 'Zurdo']); // Column for the handedness (right-handed or left-handed)
            $table->integer('anno_nacimiento'); // Column for the year of birth
            $table->timestamps(); // Columns for created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     * This method is used to drop the 'tenistas' table if it exists.
     */
    public function down(): void
    {
        // Drop the 'tenistas' table if it exists
        Schema::dropIfExists('tenistas');
    }
};