<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    use HasFactory;

    protected $table = 'proceso'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'idproceso'; // Clave primaria personalizada

    public $timestamps = false; // Desactivar timestamps

    protected $fillable = [
        'nombre', // Campos que se pueden llenar
    ];
}