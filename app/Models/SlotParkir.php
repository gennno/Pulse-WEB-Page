<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlotParkir extends Model
{
    use HasFactory;

    protected $fillable = ['id_lahan', 'kode_slot', 'status'];

    // Relationships
    public function lahanParkir()
    {
        return $this->belongsTo(LahanParkir::class, 'id_lahan');
    }

    public function tiket()
    {
        return $this->hasMany(Tiket::class, 'id_slot');
    }
}

