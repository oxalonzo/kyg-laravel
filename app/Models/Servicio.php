<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Servicio extends Model
{
      /** @use HasFactory<\Database\Factories\UserFactory> */
      use HasFactory, Notifiable;

      /**
      * The attributes that are mass assignable.
      *
      * @var list<string>
      */


    //    public function getListAttribute($value)
    // {
    //     return json_decode($value, true);
    // }

     protected $fillable = [
         'titulo',
         'descripcion',
         'list',
         'imagen',
         'user_id'
     ];
}
