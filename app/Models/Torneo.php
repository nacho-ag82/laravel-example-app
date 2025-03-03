

<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


// Definición del modelo Torneo
class Torneo extends Model
{
    // Campos que se pueden asignar masivamente
    protected $fillable = ['nombre', 'ciudad', 'superficie'];

    // Relación uno a muchos con el modelo Titulo
    public function torneos()
    {
        return $this->hasMany(Titulo::class);
    }
}