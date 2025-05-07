<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //muestra la vista de candidatos
        // return view('candidatos.index', [
        //     'vacante' => $vacante,
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $Banner)
    {
        //para mostrar los puesto de trabajo cuandoo de click en el titulo
        // return view('vacantes.show', [
        //     'vacante' => $vacante
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $Banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $Banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $Banner)
    {
        //
    }
}
