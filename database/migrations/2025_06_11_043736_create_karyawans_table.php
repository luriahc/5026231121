<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_karyawans_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // database/migrations/xxxx_xx_xx_xxxxxx_create_karyawans_table.php

public function up(): void
{
    Schema::create('karyawan', function (Blueprint $table) {
        $table->char('kodepegawai', 5)->primary(); // 
        $table->string('namalengkap', 50);      // 
        $table->char('divisi', 5);               // 
        // PERUBAHAN: dari integer menjadi string (VARCHAR)
        $table->string('departemen', 50);         // 
    });
}

    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
