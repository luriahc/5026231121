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
        Schema::create('newkaryawan', function (Blueprint $table) {
            $table->char('NIP', 9)->primary();
            $table->char('nama', 50);
            $table->char('pangkat', 15);
            # Gaji dalam format integer, dengan maksimal 12 digit 
            $table->integer('gaji')->unsigned()->default(0)->comment('Gaji dalam format integer, maksimal 12 digit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newkaryawan');
    }
};
