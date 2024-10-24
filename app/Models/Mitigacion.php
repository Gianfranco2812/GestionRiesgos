<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitigacion extends Model
{
    use HasFactory;

    protected $table = 'mitigaciones';  // nombre de la tabla
    protected $primaryKey = 'idmitigacion'; // clave primaria
    public $timestamps = false;  // si no tienes `created_at` y `updated_at`

    protected $fillable = ['actividad'];  // campos permitidos para asignación masiva
}