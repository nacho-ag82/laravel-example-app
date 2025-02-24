/**
 * Class Tenista
 *
 * This class represents a tennis player and extends the Eloquent Model.
 * It includes the following properties and methods:
 *
 * @property array $fillable The attributes that are mass assignable.
 * @method \Illuminate\Database\Eloquent\Relations\HasMany titulos() Defines a one-to-many relationship with the Titulo model.
 *
 * @package App\Http\Controllers
 */
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Tenista extends Model
{
    protected $fillable = ['nombre', 'ciudad', 'superficie'];

    public function titulos()
    {
        return $this->hasMany(Titulo::class);
    }

    /**
     * Get the full name of the tennis player.
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->nombre . ' from ' . $this->ciudad;
    }

    /**
     * Get the preferred surface of the tennis player.
     *
     * @return string
     */
    public function getPreferredSurface()
    {
        return $this->superficie;
    }
}