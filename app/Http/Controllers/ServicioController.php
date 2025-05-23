<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ServicioController extends Controller
{



    //para presentarlo al inicio
    public function index()
    {
       
           // Obtener todos los servicios del usuario logueado (puedes modificar esto según tu necesidad)
            // $servicios = Servicio::where('user_id', Auth::id())->paginate(2);
             $servicios = Servicio::paginate(2);

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
    // Guardar el archivo con nombre hasheado en la carpeta 'servicios'
    $rutaCompleta = $request->file('imagen')->store('servicios', 'public');

    // Extraer solo el nombre del archivo (sin la carpeta)
    $rutaImagen = basename($rutaCompleta); // ejemplo: Xks12asd.jpg
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
    $servicio = Servicio::findOrFail($id);
    return view('admin-servicio.edit', compact('servicio'));
}


public function update(Request $request, $id)
{
     // Validación
    $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'list' => 'required|array|min:1',
        'list.*' => 'nullable|string|max:255',
        'imagen' => 'nullable|image|max:102400', // 5MB
    ]);

    $servicio = Servicio::findOrFail($id);

    // Eliminar ítems vacíos del array de lista
    $listaLimpia = array_filter($request->list, fn($item) => trim($item) !== '');

    // Si se eliminan todos, devolver error
    if (count($listaLimpia) === 0) {
        return back()->withErrors(['list' => 'Debes ingresar al menos un ítem.'])->withInput();
    }

    // Procesar imagen si hay una nueva
    $rutaImagen = $servicio->imagen;

    if ($request->hasFile('imagen')) {
        if ($servicio->imagen) {
            Storage::disk('public')->delete('servicios/' . $servicio->imagen);
        }

        $rutaCompleta = $request->file('imagen')->store('servicios', 'public');
        $rutaImagen = basename($rutaCompleta);
    }

    // Actualizar servicio
    $servicio->update([
        'titulo' => $request->titulo,
        'descripcion' => $request->descripcion,
        'list' => json_encode(array_values($listaLimpia)), // asegúrate de que es un array indexado
        'imagen' => $rutaImagen,
        'user_id' => Auth::id(),
    ]);

    return redirect()->route('servicios.index')->with('success', 'Servicio actualizado exitosamente.');
}


public function destroy($id)
{

      // Obtener el servicio a eliminar
    $servicio = Servicio::findOrFail($id);

    // Eliminar la imagen asociada si existe
    if ($servicio->imagen) {
        Storage::disk('public')->delete('servicios/' . $servicio->imagen);
    }

    // Eliminar el servicio de la base de datos
    $servicio->delete();

    return redirect()->route('servicios.index')->with('success', 'Servicio eliminado exitosamente.');

}




}
