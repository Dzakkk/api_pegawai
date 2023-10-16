<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Biodata extends Model
{
    use HasFactory;
    
    protected $dates = ['created_at'];

    protected $table = 'biodata';
    protected $keyType = 'string';
    protected $primaryKey = 'nik';
    public $incrementing = false;
    protected $fillable =
     ['nik', 
     'name', 
     'gol_darah', 
     'Alamat', 
     'Tempat_lahir', 
     'Tanggal_lahir', 
     'no_telepon', 
     'email', 
     'pangkat', 
     'golongan', 
     'TMT', 
     'KD', 
     'Jabatan', 
     'KGB_YAD',
     'idPendidikan',
     'TMT_pensiun', 
     'keterangan'];

     /**
      * Get the pendidikan that owns the biodata
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
     public function sekolah(): BelongsTo
     {
         return $this->belongsTo(pendidikan::class, 'idPendidikan', 'IdPendidikan');
     }
}
