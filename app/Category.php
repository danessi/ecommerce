<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   /* Dos cosas a tener en cuenta en el relacionamiento entre tablas                                                                        *
    * 1- Debemos nombrar a la funcion en singular  o plural aqui ponemos products(plural) porque 1 categoria puede tener muchos productos   *
    * 2- Relacion 1 a Muchos cada Categoria tiene 1 o Muchos Productos, por tanto ver que ponemos hasMany(product) (hasMany plural).        *
    * Si fuera 1 a 1 pondriamos belongsTo(product) (belongsTo singular)                                                                     */

    public function products(){
        return $this->hasMany(product::class);
    }
}
