<?php

namespace App\Http\Controllers;

use App\Models\Informacion_General;
use Illuminate\Http\Request;

class InformacionGeneralController extends Controller
{
    

    public function index()
    {
        
        // return view('candidatos.index', [
        //     'vacante' => $vacante,
        // ]);

        return view('admin-pages.informacion');
    }


     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

    }

    /**
     * Display the specified resource.
     */
    public function show(Informacion_General $Banner)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Banner $Banner)
    // {
    //     //
    // }


     // Actualizar un banner en la base de datos
     public function update(Request $request, $id)
     {
        
     }


    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Banner $Banner)
    // {
    //     //
    // }



     // Eliminar un banner
     public function destroy($id)
     {
        
     }



}
