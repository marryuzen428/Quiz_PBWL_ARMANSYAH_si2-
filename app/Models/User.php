<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Sesuaikan nama tabel jika diperlukan
    protected $table = 'tb_users';

    // Kolom untuk autentikasi
    protected $username = 'email';

    // Kolom yang bisa diisi
    protected $fillable = [
        'email',
        'user_password',
        'user_nama',
        'user_alamat',
        'user_hp',
        'user_pos',
        'user_role',
        'user_aktif',
    ];

    // Hidden untuk hashing password
    protected $hidden = [
        'user_password',
    ];

    // Override password
    public function getAuthPassword()
    {
        return $this->user_password;
    }
}
