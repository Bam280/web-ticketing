<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    protected $table = 'tickets';
    protected $fillable = [
        'kode', 'judul', 'desc', 'lokasi', 'pelapor', 'status', 'created_at'
    ];
}
