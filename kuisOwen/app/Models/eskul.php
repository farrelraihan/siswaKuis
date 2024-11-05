<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class eskul extends Model
{
   public $timestamps = false;
    protected $fillable = [

        'id',
        'nama_eskul',
        'pembina',
        'jadwal',
        'ruangan',
        'kuota',
        'deskripsi'
        
    ];

    protected $primaryKey = 'id';
    public $incrementing = false;
}
