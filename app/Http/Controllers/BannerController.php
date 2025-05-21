<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // return view('candidatos.index', [
        //     'vacante' => $vacante,
        // ]);
        $banners = Banner::paginate(5); // Trae todos los banners de la base de datos y los paginas
        return view('banner-admin.index', compact('banners')); // Pasa los banners a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //crea un nuevo banner
        return view('banner-admin.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validar si envio el banner
        $request->validate([
            'imagen_banner' => 'required|mimes:jpeg,png,jpg,gif,avif,mp4,webm,ogg|max:102400', //100mb max
        ]);


        //guardar imagen
        $imagePath = $request->file('imagen_banner')->store('banners', 'public');
        $filename = basename($imagePath); //me saca solo el nombre de la imagen

        //crear banner
        Banner::create([
            'imagen_banner' => $filename,
            'user_id' => Auth::id()
        ]);

        // //mensaje
        // session()->flash('mensaje', 'La vacante se publicó correctamente'); 

        //devuelve al usuario a la pagian principal
        return redirect()->route('banner.index')->with('success', 'Banner creado correctamente');

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
    public function edit($id)
    {
        //mostrar la vista de editar banner
        $banner = Banner::findOrFail($id); // Encuentra el banner por ID
        return view('banner-admin.edit', compact('banner')); // Muestra el formulario de edición
    }

   

     // Actualizar un banner en la base de datos
     public function update(Request $request, $id)
     {
        $request->validate([
            'imagen_banner' => 'nullable|mimes:jpeg,png,jpg,gif,avif,mp4,webm,ogg|max:102400', // hasta 100MB
        ]);
        
 
         $banner = Banner::findOrFail($id); // Encuentra el banner
 
         if ($request->hasFile('imagen_banner')) {
             // Eliminar la imagen anterior si existe
             if ($banner->imagen_banner) {
                 unlink(storage_path('app/public/banners/' . $banner->imagen_banner)); // Elimina la imagen antigua
             }
 
             // Guardar la nueva imagen
             $imagePath = $request->file('imagen_banner')->store('banners', 'public');
             $banner->imagen_banner = basename($imagePath); // Guarda solo el nombre del archivo
         }
 
         // Actualiza el resto de los datos
         $banner->save();
 
         return redirect()->route('banner.index')->with('success', 'Banner actualizado correctamente');
     }


  


     // Eliminar un banner
     public function destroy($id)
     {
         $banner = Banner::findOrFail($id); // Encuentra el banner por ID
 
         // Elimina la imagen física
         if ($banner->imagen_banner) {
             unlink(storage_path('app/public/banners/' . $banner->imagen_banner)); // Elimina la imagen del servidor
         }
 
         // Elimina el banner de la base de datos
         $banner->delete();
 
         return redirect()->route('banner.index')->with('success', 'Banner eliminado correctamente');
     }





}
