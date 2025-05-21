<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Actividad extends Model
{


     /** @use HasFactory<\Database\Factories\UserFactory> */
     use HasFactory, Notifiable;

     /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'titulo',
        'descripcion',
        'enlace',
        'user_id'
    ];


    /**
     * Relación uno a muchos con los archivos multimedia
     */
    public function medios()
    {
        return $this->hasMany(ActividadMedia::class);
    }
}
