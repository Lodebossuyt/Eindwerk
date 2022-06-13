<?php
namespace App\Http\Traits;
use App\Models\Photo;
use Intervention\Image\Facades\Image;

trait PhotoTrait {
    public function resizeThumbnail($img, $name){
        $img = Image::make($img);
        $img->resize(100,100);
        $img->save('images/' . $name);
    }
    public function resizeMedium($img){
        $img->resize(1000, 500);
        return $img;
    }
}
