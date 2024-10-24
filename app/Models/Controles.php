<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Controles extends Model
{
    protected $table = 'controles';
    protected $primaryKey = 'idcontrol';
    public $timestamps = false;

    protected $fillable = [
        'control',
        'tipo_control'
    ];
}