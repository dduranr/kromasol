<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class NegocioDigital extends Model
{
    // Este array contiene los atributos que pueden editarse. Por lo que cualquier formulario destinado a editar books, solamente guardará en la BBDD los campos de este array, ningún otro.
    protected $fillable = [
        'titulo', 'descripcion', 'imagen', 'orden'
    ];

    // Aquí se indica el nombre de la tabla de la BBDD donde se guardarán los books
    protected $table = 'negocios_digitales';

    // Aquí se indica cómo debe tratarse cada columna. Es decir, se indica al modelo que convierta automáticamente las columnas JSON en arrays, la columna ID en int, etc. De esta manera recibiremos $category->loquesea como array y no necesitamos hacer json_decode().
    protected $casts = [
        'category' => 'integer'
    ];

    // public static function setImagen($imagen, $actual=false) {
    //     if ($imagen) {
    //         if ($actual) {
    //             // Se borra la imagen previa
    //             Storage::disk('public')->delete("img/tu-negocio-digital/$actual");
    //             $imageName = Str::random(20) . '.jpg';
    //             // Utilizamos la librería "Image" (hay que instalarla previamente)
    //             // Codificamos la imagen a JPG con calidad de 75
    //             $img = Image::make($imagen)->encode('jpg', 75);
    //             $img->resize(220, 220, function($constraint){
    //                 $constraint->upside();
    //             });
    //             // Finalmente, almacenamos la imagen en el servidor (carpeta STORAGE)
    //             Storage::disk('public')->delete("img/tu-negocio-digital/$imageName", $img->stream());
    //             return $imageName;
    //         }
    //     }
    //     else {
    //         return false;
    //     }
    // }

    public static function setImagen($foto, $actual = false)
    {
        if ($foto) {
            if ($actual) {
                Storage::disk('public')->delete("imagenes/caratulas/$actual");
            }
            $imageName = Str::random(20) . '.jpg';
            $imagen = Image::make($foto)->encode('jpg', 75);
            $imagen->resize(530, 470, function ($constraint) {
                $constraint->upsize();
            });
            Storage::disk('public')->put("imagenes/tu-negocio-digital/$imageName", $imagen->stream());
            return $imageName;
        } else {
            return false;
        }
    }

}
