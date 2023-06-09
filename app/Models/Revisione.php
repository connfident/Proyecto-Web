<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revisione extends Model
{
    use HasFactory;
    public function profesores(): BelongsTo
    {
        return $this->belongsTo(Post::class);
        
    }
}
