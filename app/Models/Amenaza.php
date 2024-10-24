<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenaza extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'amenaza';
    protected $primaryKey = 'idamenaza';

    protected $fillable = ['nombre'];
}