<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'tb_pelanggan'; // Nama tabel di database
    protected $primaryKey = 'pel_id';  // Primary key tabel

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = ['pel_nama', 'pel_alamat'];
}
