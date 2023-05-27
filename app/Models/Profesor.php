<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';
    protected $primaryKey = 'rut';
    protected $keyType = 'string';
    public $incrementing = false;

    public function propuestas(): BelongsToMany{
        return $this->belongsToMany(Propuesta::class);
    }

    public function propuestasConPivot():BelongsToMany{
        return $this->belongsToMany(Propuesta::class)->withPivot(['fecha','hora','comentario']);
    }
}
