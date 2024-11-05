<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa_eskul extends Model
{
    public $timestamps = false;
    protected $fillable = [
        
        'id',
        'siswa_id',
        'eskul_id',
        'tanggal_daftar',
        'status'
        
    ];

    protected $primaryKey = 'id';
    public $incrementing = false;
}
