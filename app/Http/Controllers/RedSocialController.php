<?php

namespace App\Http\Controllers;

use App\Models\Red_Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedSocialController extends Controller
{
    //

    public function index()
    {

        $publicaciones = Red_Social::paginate(2); 
        return view('admin-social.index', compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //para ver la view para crear nuevas informaciones
        return view('admin-social.create');
    }


     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'enlace_social' => 'required|url|max:255',
            'descripcion_social' => 'nullable|string',
            'imagen_social' => 'required|mimes:jpeg,png,jpg,gif,avif,mp4,webm,ogg|max:102400', //100mb max
        ]);


        $imagePath = $request->file('imagen_social')->store('social_img', 'public');
        $filename = basename($imagePath);

        Red_Social::create([
            'imagen_social' => $filename,
            'enlace_social' => $request->enlace_social,
            'descripcion_social' =>  $request->descripcion_social,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('Social.index')->with('success', 'Publicación creada correctamente');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        //mostrar la vista de editar informacion
        $publicacion = Red_Social::findOrFail($id); //encuentra la informacion por id 
        return view('admin-social.edit', compact('publicacion'));
    }


     // Actualizar una publicacion en la base de datos
     public function update(Request $request, $id)
     {

       
 
         $request->validate([
             'enlace_social' => 'required|string|max:255',
             'descripcion_social' => 'nullable|string',
             'imagen_social' => 'nullable|mimes:jpeg,png,jpg,gif,avif,mp4,webm,ogg|max:102400', //100mb max
         ]);
 
 
         $publicacion = Red_Social::findOrFail($id); // Encuentra el banner
 
 
         // Actualizar enlace y descripción
         $publicacion->enlace_social = $request->input('enlace_social');
         $publicacion->descripcion_social = $request->input('descripcion_social');
 
         if ($request->hasFile('imagen_social')) {
             // Eliminar la imagen anterior si existe
             if ($publicacion->imagen_social) {
                 unlink(storage_path('app/public/social_img/' . $publicacion->imagen_social)); // Elimina la imagen antigua
             }
 
             // Guardar la nueva imagen
             $imagePath = $request->file('imagen_social')->store('social_img', 'public');
             $publicacion->imagen_social = basename($imagePath); // Guarda solo el nombre del archivo
         }
 
         // Actualiza el resto de los datos
         $publicacion->save();
 
         return redirect()->route('Social.index')->with('success', 'Publicación actualizada correctamente');
     }


     // Eliminar una publicacion
    public function destroy($id) {

        $publicacion = Red_Social::findOrFail($id); // Encuentra el publicacion por ID
 
        // Elimina la imagen física
        if ($publicacion->imagen_social) {
            unlink(storage_path('app/public/social_img/' . $publicacion->imagen_social)); // Elimina la imagen del servidor
        }

        // Elimina el banner de la base de datos
        $publicacion->delete();

        return redirect()->route('Social.index')->with('success', 'Publicación eliminado correctamente');


    }

}
