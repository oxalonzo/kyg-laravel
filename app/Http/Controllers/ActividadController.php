<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\ActividadMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ActividadController extends Controller
{

    public function index()
    {
         $actividads = Actividad::with('medios')->latest()->paginate(2);
        return view('actividades-admin.index', compact('actividads'));
    }
    

     public function create()
    {
        return view('actividades-admin.create');
    }


    public function store(Request $request)
{
    $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required',
        'enlace' => 'required|url',
        'medios.*' => 'file|mimes:jpg,jpeg,png,mp4,avif,webp,mov,avi|max:102400',
    ]);

     // Creamos la actividad y le asignamos el usuario autenticado
    $actividad = Actividad::create([
        'titulo' => $request->titulo,
        'descripcion' => $request->descripcion,
        'enlace' => $request->enlace,
        'user_id' => Auth::id(), // usuario autenticado
    ]);

    if ($request->hasFile('medios')) {
        foreach ($request->file('medios') as $file) {
            $path = $file->store('actividades', 'public');
            $tipo = str_starts_with($file->getMimeType(), 'video') ? 'video' : 'imagen';

            $actividad->medios()->create([
                'archivo' => $path,
                'tipo' => $tipo
            ]);
        }
    }

    return redirect()->route('actividades-admin.index')->with('success', 'Actividad creada correctamente.');
}


public function edit($id)
{
    $actividad = Actividad::with('medios')->findOrFail($id);
    return view('actividades-admin.edit', compact('actividad'));
}


public function update(Request $request, $id)
{
    $actividad = Actividad::findOrFail($id);

    $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required',
        'enlace' => 'nullable|url',
        'medios.*' => 'file|mimes:jpg,jpeg,png,mp4,avif,webp,mov,avi|max:102400',
    ]);

     // Creamos la actividad y le asignamos el usuario autenticado
    $actividad->update([
        'titulo' => $request->titulo,
        'descripcion' => $request->descripcion,
        'enlace' => $request->enlace,
        'user_id' => Auth::id(), // usuario autenticado
    ]);

    if ($request->hasFile('medios')) {
        foreach ($request->file('medios') as $file) {
            $path = $file->store('actividades', 'public');
            $tipo = str_starts_with($file->getMimeType(), 'video') ? 'video' : 'imagen';

            $actividad->medios()->create([
                'archivo' => $path,
                'tipo' => $tipo
            ]);
        }
    }

    return redirect()->route('actividades-admin.index')->with('success', 'Actividad actualizada correctamente.');
}


public function destroy($id)
{

$actividad = Actividad::findOrFail($id);

    foreach ($actividad->medios as $media) {
        if (Storage::disk('public')->exists($media->archivo)) {
            Storage::disk('public')->delete($media->archivo);
        }
        $media->delete();
    }

    $actividad->delete();

    return redirect()->route('actividades-admin.index')->with('success', 'Actividad eliminada correctamente.');
}


public function eliminarMedia($id)
{
    $media = ActividadMedia::findOrFail($id);

    // Eliminar el archivo físico
    if (Storage::disk('public')->exists($media->archivo)) {
        Storage::disk('public')->delete($media->archivo);
    }

    // Eliminar el registro
    $media->delete();

    return back()->with('success', 'Archivo multimedia eliminado correctamente.');
}



}
