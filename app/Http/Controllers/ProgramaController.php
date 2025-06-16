<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProgramaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $programas = Programa::paginate();

        return view('programa.index', compact('programas'))
            ->with('i', ($request->input('page', 1) - 1) * $programas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $programa = new Programa();

        return view('programa.create', compact('programa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProgramaRequest $request): RedirectResponse
    {
        Programa::create($request->validated());

        return Redirect::route('programas.index')
            ->with('success', 'Programa created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $programa = Programa::find($id);

        return view('programa.show', compact('programa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $programa = Programa::find($id);

        return view('programa.edit', compact('programa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProgramaRequest $request, Programa $programa): RedirectResponse
    {
        $programa->update($request->validated());

        return Redirect::route('programas.index')
            ->with('success', 'Programa updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Programa::find($id)->delete();

        return Redirect::route('programas.index')
            ->with('success', 'Programa deleted successfully');
    }
}
