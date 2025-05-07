<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class ActividadMedia extends Model
{
    

     /** @use HasFactory<\Database\Factories\UserFactory> */
     use HasFactory, Notifiable;

     /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'actividad_id',
        'archivo',
        'tipo',
    ];

    

    public function actividad()
    {
        return $this->belongsTo(Actividad::class);
    }
}
