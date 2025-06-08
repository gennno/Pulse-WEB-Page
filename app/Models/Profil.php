<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = ['id_akun', 'email', 'nama_lengkap', 'foto', 'alamat'];

    // Relationships
    public function akun()
    {
        return $this->belongsTo(Akun::class, 'id_akun');
    }
}

