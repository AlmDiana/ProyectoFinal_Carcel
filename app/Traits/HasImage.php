<?php

namespace App\Traits;

use App\Models\Image;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait HasImage
{

    //FUNCIÓN PARA ELIMINAR IMAGEN DE BD Y DIRECTORIO
    private function deletePreviousImage(string $previous_image)
    {
        Storage::delete($previous_image);
    }

    //FUNCIÓN PARA GUARDAR LA IMAGEN 
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    //FUNCIÓN PARA GUARDAR LA IMAGEN 
    public function storeImage(UploadedFile $new_image, string $directory = 'images')
    {
        $image = new Image([
            'path' => $new_image->store($directory, 'public'),
        ]);

        $this->image()->save($image);
    }
    // FUNCIÓN PARA ACTUALIZAR IMAGEN Y ELIMINAR ANTERIOR
    public function updateImage(UploadedFile $new_image, string $directory = 'images')
    {
        $previous_image = $this->image;

        if ($previous_image) {
            $previous_image_path = $previous_image->path;

            $previous_image->path = $new_image->store($directory, 'public');
            $previous_image->save();
            //GUARDAR EN STORAGE PUBLIC:
            Storage::disk('public')->delete($previous_image_path);
        } else {
            $this->storeImage($new_image, $directory);
        }
    }
}