<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Torneo;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\TorneoRequest;
use Illuminate\View\View;

/**
 * Class TorneoController
 *
 * This controller handles the CRUD operations for the Torneo model.
 *
 * @package App\Http\Controllers
 */
class TorneoController extends Controller
{
    /**
     * Display a listing of the torneos.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $torneos = Torneo::paginate(6); // Para mostrarlo todo (6 por página)
        return view('torneos.index', ['torneos' => $torneos]);
    }

    /**
     * Remove the specified torneo from storage.
     *
     * @param  \App\Models\Torneo  $torneo
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Torneo $torneo): RedirectResponse
    {
        $torneo->delete();
        return redirect()->route('torneos.index');
    }

    /**
     * Show the form for creating a new torneo.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('torneos.create', [
            'torneo' => new Torneo(),
            'method' => 'POST', // Si estoy en el create hago un POST
            'actionUrl' => route('torneos.store'),
            'submitButtonText' => 'Añadir torneo'
        ]);
    }

    /**
     * Store a newly created torneo in storage.
     *
     * @param  \App\Http\Requests\TorneoRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TorneoRequest $request): RedirectResponse
    {
        Torneo::create($request->validated()); // Va a añadir el objeto
        return redirect()->route('torneos.index');
    }

    /**
     * Show the form for editing the specified torneo.
     *
     * @param  \App\Models\Torneo  $torneo
     * @return \Illuminate\View\View
     */
    public function edit(Torneo $torneo): View
    {
        return view('torneos.edit', [
            'torneo' => $torneo,
            'method' => 'PUT', // Si estoy en el edit hago un PUT
            'actionUrl' => route('torneos.update', $torneo),
            'submitButtonText' => 'Actualizar torneo'
        ]);
    }

    /**
     * Update the specified torneo in storage.
     *
     * @param  \App\Http\Requests\TorneoRequest  $request
     * @param  \App\Models\Torneo  $torneo
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(TorneoRequest $request, Torneo $torneo): RedirectResponse
    {
        $torneo->update($request->validated());
        return redirect()->route('torneos.index');
    }
}
