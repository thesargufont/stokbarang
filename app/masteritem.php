<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class masteritem extends Model
{
    protected $fillable = [
        'kodebarang',
        'namabarang',
        'um'
    ];
}
