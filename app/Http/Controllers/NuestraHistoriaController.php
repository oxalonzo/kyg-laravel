<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nuestra_Historia;
use Illuminate\Support\Facades\Auth;

class NuestraHistoriaController extends Controller
{
 
    public function index()
    {
        $historias  = Nuestra_Historia::paginate(2);
        return view('admin-historia.index', compact('historias'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //para ver la view para crear nuevas informaciones
        return view('admin-historia.create');
    }


      /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         $request->validate([
            'Año_de_inicio' => 'required|integer',
            'Año_de_fin' => 'required|integer',
            'empresa' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'descripcion_historia' => 'required|string',
        ]);

         Nuestra_Historia::create([
            'from_year' => $request->Año_de_inicio,
            'to_year' => $request->Año_de_fin,
            'empresa' =>  $request->empresa,
            'ubicacion' =>  $request->ubicacion,
            'descripcion_historia' =>  $request->descripcion_historia,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('historia.index')->with('success', 'historia creada correctamente');
    }


    public function edit($id)
    {

        //mostrar la vista de editar informacion
        $historia = Nuestra_Historia::findOrFail($id); //encuentra la informacion por id 
        return view('admin-historia.edit', compact('historia'));
    }


    // Actualizar una publicacion en la base de datos
    public function update(Request $request, $id)
    {

      

        $request->validate([
            'Año_de_inicio' => 'required|integer',
            'Año_de_fin' => 'required|integer',
            'empresa' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'descripcion_historia' => 'required|string',
        ]);



        $historia = Nuestra_Historia::findOrFail($id); // Encuentra el banner


        // Actualizar enlace y descripción
        $historia->from_year = $request->input('Año_de_inicio');
        $historia->to_year = $request->input('Año_de_fin');
        $historia->empresa = $request->input('empresa');
        $historia->ubicacion = $request->input('ubicacion');
        $historia->descripcion_historia = $request->input('descripcion_historia');

        // Actualiza el resto de los datos
        $historia->save();

        return redirect()->route('historia.index')->with('success', 'historia actualizada correctamente');
    }

    // Eliminar una publicacion
    public function destroy($id) {

        $historia = Nuestra_Historia::findOrFail($id); // Encuentra el historia por ID
 
        

        // Elimina el banner de la base de datos
        $historia->delete();

        return redirect()->route('historia.index')->with('success', 'historia eliminado correctamente');


    }
 
    
}
