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
        Schema::create('tb_golongan', function (Blueprint $table) {
            $table->tinyIncrements('gol_id'); // Primary Key dengan ukuran kecil
            $table->string('gol_kode', 10); // Kode Golongan
            $table->string('gol_nama', 50); // Nama Golongan
            $table->timestamp('created_at')->useCurrent(); // Waktu Dibuat
            $table->dateTime('updated_at')->nullable(); // Waktu Diperbarui
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_golongan');
    }
};
