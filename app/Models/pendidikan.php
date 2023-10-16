<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendidikan extends Model
{
    use HasFactory;

    protected $dates = ['created_at'];

    protected $table = 'pendidikan';
    protected $keyType = 'string';
    protected $primaryKey = 'IdPendidikan';
    public $incrementing = false;
    protected $fillable = [
        'IdPendidikan',
        'nama_pendidikan',
        'tanggalLulus',
    ];

}
