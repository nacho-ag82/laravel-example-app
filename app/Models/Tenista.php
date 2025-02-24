/**
 * Tenista Model
 *
 * This model represents a tennis player and is used to interact with the 'tenistas' table in the database.
 * It extends the Eloquent Model provided by Laravel.
 *
 * @property string $nombre The name of the tennis player.
 * @property string $ciudad The city of the tennis player.
 * @property string $superficie The preferred surface of the tennis player.
 *
 * @method \Illuminate\Database\Eloquent\Relations\HasMany titulos() Get the titles associated with the tennis player.
 */
use Illuminate\Database\Eloquent\Model;

<?php

namespace App\Models;


class Tenista extends Model
{
    protected $fillable = ['nombre', 'ciudad', 'superficie'];

    public function titulos()
    {
        return $this->hasMany(Titulo::class);
    }
}