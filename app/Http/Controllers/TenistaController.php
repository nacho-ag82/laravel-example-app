<?php 
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tenista;

class TenistaController extends Model
{

/*
    @return View
*/
    public function index(): View
    {
        $tenistas = Tenista::with(['nombre', 'ciudad','superficie'])->paginate(6); 
        return view('tenistas.index', [
            'tenistas' => $tenistas,
            ]);
    }


    public function delete(Tenista $tenista): RedirectResponse
    {
        $torneo->delete();
        return redirect()->route('tenistas.index');
    }
 
}