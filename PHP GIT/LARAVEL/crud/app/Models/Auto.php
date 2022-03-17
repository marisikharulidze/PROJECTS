<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    // protected $table = 'autos';
    // protected $primaryKey = 'id';
    protected $fillable = ['saxeli', 'modeli', 'gamoshvebis_weli', 'dzravis_moculoba', 'ganbajeba', 'fasi'];
}
