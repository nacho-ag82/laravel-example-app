/**
 * Class TituloController
 * 
 * This controller handles the CRUD operations for the Titulos model.
 * It also provides a method to retrieve titles for a specific Tenista.
 */
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Titulos;
use App\Models\Tenista;
use App\Models\Torneo;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TituloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $titulos = Titulos::with(['tenista', 'torneo'])->paginate(6); 
        return view('titulos.index', ['titulos' => $titulos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Titulos $titulo
     * @return RedirectResponse
     */
    public function delete(Titulos $titulo): RedirectResponse
    {
        $titulo->delete();
        return redirect()->route('titulos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $tenistas = Tenista::all();
        $torneos = Torneo::all();

        return view('titulos.create', [
            'titulo' => new Titulos(),
            'method' => 'POST', // Si estoy en el create, hago un POST
            'actionUrl' => route('titulos.store'),
            'sumbitButtonText' => 'Añadir título',
            'tenistas' => $tenistas,
            'torneos' => $torneos,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        Titulos::create($request->all());
        return redirect()->route('titulos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Titulos $titulo
     * @return View
     */
    public function edit(Titulos $titulo): View
    {
        $tenistas = Tenista::all();
        $torneos = Torneo::all();

        return view('titulos.edit', [
            'titulo' => $titulo,
            'method' => 'PUT', // Si estoy en el edit, hago un PUT
            'actionUrl' => route('titulos.update', $titulo),
            'sumbitButtonText' => 'Actualizar título',
            'tenistas' => $tenistas,
            'torneos' => $torneos,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Titulos $titulo
     * @return RedirectResponse
     */
    public function update(Request $request, Titulos $titulo): RedirectResponse
    {
        $request->validate([
            'anno' => 'required|integer|min:1900|max:' . date('Y'),
            'tenista_id' => 'required|exists:tenistas,id',
            'torneo_id' => 'required|exists:torneos,id',
        ]);

        $titulo->update($request->all());
        return redirect()->route('titulos.index');
    }

    /**
     * Display a listing of the titles for a specific Tenista.
     *
     * @param Tenista $tenista
     * @return View
     */
    public function titulosTenista(Tenista $tenista): View
    {
        $titulos = $tenista->titulos()->with('torneo')->get();
        return view('titulosTenista', compact('titulos', 'tenista'));
    }
}

?>