<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{



    //para presentarlo al inicio
    public function index()
    {
        $servicios = Servicio::latest()->get();
        return view('admin-pages.servicios-admin', compact('servicios'));
    }


    //para cuando vas a poner el formulario para crear uno nuevo 
    // public function create()
    // {
    //     return view('servicios-admin');
    // }



    //     public function store(Request $request)
    // {
    //     $request->validate([
    //         'titulo' => 'required|string',
    //         'descripcion' => 'required|string',
    //         'list' => 'required|string',
    //         'imagen' => 'nullable|image|max:2048',
    //     ]);

    //     $listItems = explode("\n", $request->input('list')); // Convertir líneas en array
    //     $listItems = array_map('trim', $listItems); // Limpiar espacios

    //     $imagePath = null;
    //     if ($request->hasFile('imagen')) {
    //         $imagePath = $request->file('imagen')->store('img', 'public');
    //     }

    //     Servicio::create([
    //         'titulo' => $request->titulo,
    //         'descripcion' => $request->descripcion,
    //         'list' => json_encode($listItems),
    //         'imagen' => $imagePath,
    //     ]);

    //     return redirect()->route('servicios.index')->with('success', 'Item guardado correctamente');

    //     //cuando ya estes guardando imagenes sail artisan storage:link
    // }


    /** 
     * 
     * esto es para cuando vaya a presentar los serviciios unn ejemplo para guiarme para que se muestre como lista
     * @foreach($items as $item)
    *<h2>{{ $item->title }}</h2>
    *<p>{{ $item->description }}</p>

    *<ul>
     *   @foreach(json_decode($item->list) as $listItem)
      *      <li>{{ $listItem }}</li>
       * @endforeach
    *</ul>

    *@if($item->image)
     *   <img src="{{ asset('storage/' . $item->image) }}" alt="Imagen" width="200">
    *@endif

    *<hr>
    *@endforeach

    **/



}
