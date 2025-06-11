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
        Schema::create('sepedamotor', function (Blueprint $table) {
            $table->id('ID'); // int, auto-increment (auto number), primary key
            $table->string('merksepedamotor', 25); // VARCHAR(25)
            $table->integer('hargasepedamotor'); // INT
            $table->boolean('tersedia'); // BOOLEAN
            $table->float('berat'); // FLOAT
            $table->timestamps(); // Standar Laravel: created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sepedamotor');
    }
};