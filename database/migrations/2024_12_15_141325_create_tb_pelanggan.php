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
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->increments('pel_id'); // Primary Key
            $table->unsignedTinyInteger('pel_id_gol'); // Foreign Key ke tb_golongan
            $table->string('pel_no', 20)->unique(); // Nomor Pelanggan
            $table->string('pel_nama', 50); // Nama Pelanggan
            $table->text('pel_alamat')->nullable(); // Alamat
            $table->string('pel_hp', 20)->nullable(); // No HP
            $table->string('pel_ktp', 50)->nullable(); // No KTP
            $table->string('pel_seri', 50)->nullable(); // No Seri
            $table->integer('pel_meteran'); // Meteran
            $table->enum('pel_aktif', ['Y', 'N'])->default('Y'); // Status Aktif
            $table->unsignedInteger('pel_id_user'); // Foreign Key ke tb_users
            $table->timestamp('created_at')->useCurrent(); // Waktu Dibuat
            $table->dateTime('updated_at')->nullable(); // Waktu Diperbarui

            // Foreign Key Constraints
            $table->foreign('pel_id_gol')
                  ->references('gol_id')
                  ->on('tb_golongan')
                  ->onDelete('cascade');

            $table->foreign('pel_id_user')
                  ->references('user_id')
                  ->on('tb_users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pelanggan');
    }
};
