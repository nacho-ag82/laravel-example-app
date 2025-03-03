<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;






class Tenista extends Model
{
    protected $fillable = ['nombre', 'ciudad', 'superficie'];

    public function titulos()
    {
        return $this->hasMany(Titulo::class);
    }
}