/**
 * Class Titulo
 *
 * This model represents a title won by a tennis player in a tournament.
 * It is an Eloquent model that interacts with the 'titulos' table in the database.
 *
 * @package App\Models
 *
 * @property int $id
 * @property int $tenista_id
 * @property int $torneo_id
 * @property int $anio
 *
 * @property-read \App\Models\Tenista $tenista
 * @property-read \App\Models\Torneo $torneo
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Titulo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Titulo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Titulo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Titulo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Titulo whereTenistaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Titulo whereTorneoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Titulo whereAnio($value)
 */
use Illuminate\Database\Eloquent\Model;

<?php

namespace App\Models;


class Titulo extends Model
{
    protected $fillable = ['tenista_id', 'torneo_id', 'anio'];

    public function tenista()
    {
        return $this->belongsTo(Tenista::class);
    }

    public function torneo()
    {
        return $this->belongsTo(Torneo::class);
    }
}