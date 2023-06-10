<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesorPropuesta extends Model
{
    use HasFactory;
    protected $table = 'profesor_propuesta';
    protected $fillable = ['profesor_rut', 'comentario' ];

    public function profesor(): HasMany
    {
        
        return $this->hasMany(Profesor::class);
    }

    public function propuesta(): HasMany
    {
        return $this->hasMany(Propuesta::class);
    }

}