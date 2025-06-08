<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LahanParkir extends Model
{
    use HasFactory;

    protected $fillable = ['nama_lokasi', 'alamat', 'jenis', 'foto', 'tarif_per_jam', 'status'];

    // Relationships
    public function slotParkir()
    {
        return $this->hasMany(SlotParkir::class, 'id_lahan');
    }
}

