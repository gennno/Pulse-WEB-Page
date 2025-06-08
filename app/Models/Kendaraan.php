<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = ['id_akun', 'no_kendaraan', 'brand', 'year', 'model', 'colour', 'status'];

    // Relationships
    public function akun()
    {
        return $this->belongsTo(Akun::class, 'id_akun');
    }
}

