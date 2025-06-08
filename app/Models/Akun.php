<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Akun extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['email', 'password', 'no_hp', 'role', 'datetime'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relationships
    public function profil()
    {
        return $this->hasOne(Profil::class, 'id_akun');
    }

    public function dompet()
    {
        return $this->hasOne(Dompet::class, 'id_akun');
    }

    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class, 'id_akun');
    }

    public function tiket()
    {
        return $this->hasMany(Tiket::class, 'id_akun');
    }
}

