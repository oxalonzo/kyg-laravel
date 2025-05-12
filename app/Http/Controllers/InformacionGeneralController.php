<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Informacion_General;
use Illuminate\Support\Facades\Auth;

class InformacionGeneralController extends Controller
{


    public function index()
    {

        // return view('candidatos.index', [
        //     'vacante' => $vacante,
        // ]);

        $informaciones = Informacion_General::paginate(2);
        return view('admin-informacion.index', compact('informaciones'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //para ver la view para crear nuevas informaciones
        return view('admin-informacion.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'titulo_info_general' => 'required|string|max:255',
            'descripcion_info' => 'required|string',
            'imagen_info' => 'required|mimes:jpeg,png,jpg,gif,avif,mp4,webm,ogg|max:102400', //100mb max
        ]);


        $imagePath = $request->file('imagen_info')->store('info_img', 'public');
        $filename = basename($imagePath);

        Informacion_General::create([
            'titulo_info_general' => $request->titulo_info_general,
            'descripcion_info' =>  $request->descripcion_info,
            'imagen_info' => $filename,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('informacion.index')->with('success', 'información General creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Informacion_General $Banner) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        //mostrar la vista de editar informacion
        $informacion = Informacion_General::findOrFail($id); //encuentra la informacion por id 
        return view('admin-informacion.edit', compact('informacion'));
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

        $request->validate([
            'titulo_info_general' => 'required|string|max:255',
            'descripcion_info' => 'required|string',
            'imagen_info' => 'nullable|mimes:jpeg,png,jpg,gif,avif,mp4,webm,ogg|max:102400', //100mb max
        ]);


        $informacion = Informacion_General::findOrFail($id); // Encuentra el banner


        // Actualizar título y descripción
        $informacion->titulo_info_general = $request->input('titulo_info_general');
        $informacion->descripcion_info = $request->input('descripcion_info');

        if ($request->hasFile('imagen_info')) {
            // Eliminar la imagen anterior si existe
            if ($informacion->imagen_info) {
                unlink(storage_path('app/public/info_img/' . $informacion->imagen_info)); // Elimina la imagen antigua
            }

            // Guardar la nueva imagen
            $imagePath = $request->file('imagen_info')->store('info_img', 'public');
            $informacion->imagen_info = basename($imagePath); // Guarda solo el nombre del archivo
        }

        // Actualiza el resto de los datos
        $informacion->save();

        return redirect()->route('informacion.index')->with('success', 'Información general actualizado correctamente');
    }


    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Banner $Banner)
    // {
    //     //
    // }



    // Eliminar una informacion
    public function destroy($id) {

        $informacion = Informacion_General::findOrFail($id); // Encuentra el informacion por ID
 
        // Elimina la imagen física
        if ($informacion->imagen_info) {
            unlink(storage_path('app/public/info_img/' . $informacion->imagen_info)); // Elimina la imagen del servidor
        }

        // Elimina el banner de la base de datos
        $informacion->delete();

        return redirect()->route('informacion.index')->with('success', 'Información general eliminado correctamente');


    }
}
