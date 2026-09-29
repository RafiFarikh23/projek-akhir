<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    protected $table = 'lapangan';

    protected $primaryKey = 'id_lapangan';

    public $timestamps = false;

    protected $fillable = [
        'nama_lapangan',
        'jenis',
        'harga',
        'fasilitas',
        'status'
    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'id_lapangan');
    }
}