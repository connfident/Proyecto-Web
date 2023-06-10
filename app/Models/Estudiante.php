<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = 'estudiantes';
    protected $primaryKey  = 'rut';
    protected $KeyType = 'string';
    public $incrementing = false;
    protected $fillable = ["rut", "nombre", "apellido", "email", ];

    //public function estudiantes(): HasMany
    //{
        //return $this->hasMany(Estudiante::class);
    //}

    public function propuesta():HasMany
    {
        return $this->hasMany(Propuesta::class);
    }
}
