<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    public $timestamps = false;
    protected $fillable = [
        
        'id',
        'nama_siswa',
        'kelas',
        'NIS',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'email'
        
    ];

    protected $primaryKey = 'id';
    public $incrementing = false;
}
