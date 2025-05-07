<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    


//     public function store(Request $request)
// {
//     $request->validate([
//         'titulo' => 'required|string|max:255',
//         'descripcion' => 'required|string',
//         'enlace' => 'required|url',
//         'medios' => 'required|array|max:5',
//         'medios.*' => 'file|mimes:jpeg,png,jpg,mp4,mov,avi|max:20480', // máx 20MB por archivo
//     ]);

//     $actividad = Actividad::create([
//         'titulo' => $request->titulo,
//         'descripcion' => $request->descripcion,
//         'enlace' => $request->enlace,
//     ]);

//     foreach ($request->file('medios') as $media) {
//         $tipo = str_starts_with($media->getMimeType(), 'image') ? 'imagen' : 'video';
//         $path = $media->store('actividades', 'public');

//         $actividad->medios()->create([
//             'archivo' => $path,
//             'tipo' => $tipo,
//         ]);
//     }

//     return redirect()->route('actividades.index')->with('success', 'Actividad creada correctamente');
// }


}
