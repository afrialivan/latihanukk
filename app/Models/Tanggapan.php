<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class, 'id_petugas');
    }
    public function pengaduan() {
        return $this->hasMany(Pengaduan::class, 'id_pengaduan');
    }
}
