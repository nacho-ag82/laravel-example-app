use Illuminate\Database\Eloquent\Model;

<?php

namespace App\Models;

// Definición del modelo Torneo
class Torneo extends Model
{
    // Campos que se pueden asignar masivamente
    protected $fillable = ['nombre', 'ciudad', 'superficie'];

    // Relación uno a muchos con el modelo Titulo
    public function titulos()
    {
        return $this->hasMany(Titulo::class);
    }
}