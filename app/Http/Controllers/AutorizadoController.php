<?php

namespace App\Http\Controllers;

use App\Models\Autorizado;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AutorizadoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AutorizadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $autorizados = Autorizado::paginate();

        return view('autorizado.index', compact('autorizados'))
            ->with('i', ($request->input('page', 1) - 1) * $autorizados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $autorizado = new Autorizado();

        return view('autorizado.create', compact('autorizado'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AutorizadoRequest $request): RedirectResponse
    {
        Autorizado::create($request->validated());

        return Redirect::route('autorizados.index')
            ->with('success', 'Autorizado created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $autorizado = Autorizado::find($id);

        return view('autorizado.show', compact('autorizado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $autorizado = Autorizado::find($id);

        return view('autorizado.edit', compact('autorizado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AutorizadoRequest $request, Autorizado $autorizado): RedirectResponse
    {
        $autorizado->update($request->validated());

        return Redirect::route('autorizados.index')
            ->with('success', 'Autorizado updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Autorizado::find($id)->delete();

        return Redirect::route('autorizados.index')
            ->with('success', 'Autorizado deleted successfully');
    }
}
