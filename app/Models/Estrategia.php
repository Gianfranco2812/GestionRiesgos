<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estrategia extends Model
{
    use HasFactory;
    protected $primaryKey = 'idestrategia';
    protected $table = 'estrategia';
    public $timestamps = false;

    // Asignación masiva
    protected $fillable = ['estrategia_mitigacion'];
}