<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function tanggapan() {
        return $this->hasMany(Tanggapan::class, 'id_tanggapan');
    }

    public function scopeFilter($query, array $filters) {
        $query->when(
            $filters['search'] ?? false,
            function ($query, $search) {
                $query->where('judul_pengaduan', 'like', '%' . $search . '%')
                ->orWhere('isi_laporan', 'like', '%' . $search . '%');
            }
        );
    }

}
