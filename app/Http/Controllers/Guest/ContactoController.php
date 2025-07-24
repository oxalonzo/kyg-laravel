<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //view contacto

           return view('guest-pages/contacto');
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
        
        //send email
          // Validación de los datos
         $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'Whatsapp' => 'required|numeric',
            'email' => 'required|email',
            'empresa' => 'required|string|max:255',
            'marca_vehiculo' => 'required|string|max:255',
            'modelo_vehiculo' => 'required|string|max:255',
            'year_vehiculo' => 'required|integer',
            'nota' => 'required|string|max:500',
            'sucursal' => 'required|string|max:255',
            'fecha_servicio' => 'required|date',
        ]);

        // Enviar correo
        // Mail::to('tucorreo@dominio.com')->send(new ContactoMail($request));

        // Redireccionar o mostrar mensaje
        return redirect()->back()->with('success', 'Gracias por contactarnos. Te responderemos pronto.');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
