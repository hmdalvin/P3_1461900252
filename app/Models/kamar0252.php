<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar0252 extends Model
{
    use HasFactory;
    
    protected $table = 'kamar';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_pasien',
        'id_dokter' 
    ];
}
