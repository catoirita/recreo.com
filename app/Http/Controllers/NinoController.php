<?php

namespace App\Http\Controllers;

use App\Models\Nino;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\NinoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class NinoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $ninos = Nino::paginate();

        return view('nino.index', compact('ninos'))
            ->with('i', ($request->input('page', 1) - 1) * $ninos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $nino = new Nino();

        return view('nino.create', compact('nino'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NinoRequest $request): RedirectResponse
    {
        Nino::create($request->validated());

        return Redirect::route('ninos.index')
            ->with('success', 'Nino created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $nino = Nino::find($id);

        return view('nino.show', compact('nino'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $nino = Nino::find($id);

        return view('nino.edit', compact('nino'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NinoRequest $request, Nino $nino): RedirectResponse
    {
        $nino->update($request->validated());

        return Redirect::route('ninos.index')
            ->with('success', 'Nino updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Nino::find($id)->delete();

        return Redirect::route('ninos.index')
            ->with('success', 'Nino deleted successfully');
    }
}
