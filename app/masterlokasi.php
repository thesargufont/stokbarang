<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class masterlokasi extends Model
{
    protected $fillable = [
        'kodelokasi',
        'namalokasi'
    ];
}
