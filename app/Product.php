<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

   /* Dos cosas a tener en cuenta en el relacionamiento entre tablas                                                                        *
    *   1- Debemos nombrar a la funcion en singular  o plural aqui ponemos category (Singular) porque 1 producto puede tener solo 1         *
    *   categoria, si fuera 1 producto a muchas categorias la funcion deberia llamarse categories (plural) que no es el caso .              *
    *   2- Relacion 1 a 1 cada Producto tiene solo 1 categoria, por tanto ver que ponemos belongsTo(Category) (belongsTo singular).         *
    *   Si fuera 1 a muchos pondriamos hasMany(Category) (plural) que no es el caso .                                                       */

    public function category() {
        return $this->belongsTo(Category::class);
        /* si en el diseño de la BD en la tabla products,
        yo No nombre a la key "category_id" de la forma en ingles como la usa laravel, debo poner el nombre al final siempre 
        digamos si la rotule "categoria_id", voy a tener que poner: return $this->belongsTo(Category::class,'categoria_id'); */
        /* De la misma forma, si en el diseño de la BD de tabla categories
        yo No nombre a la key "id" de la forma en ingles como la usa laravel, debo poner el nombre al final siempre 
        digamos si la rotule "id_categorias", para
        voy a tener que poner: return $this->belongsTo(Category::class,'categoria_id','id_categorias'); */
        /* si uso la nomenclatura en ingles que usa laravel es todo mas simple */
        /*  analogo para la relacion en la clase Category. */

    }
}
