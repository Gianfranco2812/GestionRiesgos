<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoActivo extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'TIPO_ACTIVO';

    // La clave primaria de la tabla
    protected $primaryKey = 'idtipoactivo';

    // Los campos que se pueden llenar (mass assignable)
    protected $fillable = ['nombre', 'definicion'];

    // Si no usas los timestamps 'created_at' y 'updated_at'
    public $timestamps = false;

    // Si es necesario definir relaciones, se puede hacer aquí
}