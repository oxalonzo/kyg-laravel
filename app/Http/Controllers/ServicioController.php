<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServicioController extends Controller
{



    //para presentarlo al inicio
    public function index()
    {
       

           // Obtener todos los servicios del usuario logueado (puedes modificar esto según tu necesidad)
    $servicios = Servicio::where('user_id', Auth::id())->get();

    // Retornar la vista con los servicios
    return view('admin-servicio.index', compact('servicios'));
    }



     public function create()
    {
        return view('admin-servicio.create');
    }


    public function store(Request $request)
{
     $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'list' => 'required|array|min:1',
        'list.*' => 'string|max:255',
        'imagen' => 'nullable|image|max:102400', // 5MB
    ]);

    $rutaImagen = null;

    if ($request->hasFile('imagen')) {
        $rutaImagen = $request->file('imagen')->store('servicios', 'public');
    }

    Servicio::create([
        'titulo' => $request->titulo,
        'descripcion' => $request->descripcion,
        'list' => json_encode($request->list),
        'imagen' => $rutaImagen,
        'user_id' => Auth::id(),
    ]);

    return redirect()->route('servicios.index')->with('success', 'Servicio creado exitosamente.');
}




public function edit($id)
{
    // $actividad = Actividad::with('medios')->findOrFail($id);
    return view('actividades-admin.edit');
}


public function update(Request $request, $id)
{
    // $actividad = Actividad::findOrFail($id);

    // $request->validate([
    //     'titulo' => 'required|string|max:255',
    //     'descripcion' => 'required',
    //     'enlace' => 'nullable|url',
    //     'medios.*' => 'file|mimes:jpg,jpeg,png,mp4,avif,webp,mov,avi|max:102400',
    // ]);

    //  // Creamos la actividad y le asignamos el usuario autenticado
    // $actividad->update([
    //     'titulo' => $request->titulo,
    //     'descripcion' => $request->descripcion,
    //     'enlace' => $request->enlace,
    //     'user_id' => Auth::id(), // usuario autenticado
    // ]);

    // if ($request->hasFile('medios')) {
    //     foreach ($request->file('medios') as $file) {
    //         $path = $file->store('actividades', 'public');
    //         $tipo = str_starts_with($file->getMimeType(), 'video') ? 'video' : 'imagen';

    //         $actividad->medios()->create([
    //             'archivo' => $path,
    //             'tipo' => $tipo
    //         ]);
    //     }
    // }

    // return redirect()->route('actividades-admin.index')->with('success', 'Actividad actualizada correctamente.');
}


public function destroy($id)
{


}




}
