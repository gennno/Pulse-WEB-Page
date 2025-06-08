<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $fillable = ['id_akun', 'id_slot', 'status', 'waktu_masuk', 'waktu_keluar', 'biaya_total'];

    // Relationships
    public function akun()
    {
        return $this->belongsTo(Akun::class, 'id_akun');
    }

    public function slotParkir()
    {
        return $this->belongsTo(SlotParkir::class, 'id_slot');
    }
}
