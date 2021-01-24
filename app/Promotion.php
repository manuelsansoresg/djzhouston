<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Promotion extends Model
{

    protected $fillable = [
        'picture'
    ];

    protected $table = 'promotions';

    public static function save_edit($request, $path, $id = '')
    {
        

        if ($request->hasFile('picture') != false) { //image is not empty coverfile
            $image_cover = $request->file('picture');
            $name_image = uploadImage($_FILES['picture'], $image_cover, '.' . $path, true);
            
            if ($id == '') {
                $new_image = new Promotion();
                $new_image->picture = $name_image;
                $new_image->save();
            } else {
                $promotion = Promotion::find($id);

                if ($promotion !== null) {
                    @unlink('.' . $path . '/' . $promotion->picture);
                    @unlink('.' . $path . '/thumb_' . $promotion->picture);
                }
                $promotion->picture = $name_image;
                $promotion->update();
            }
        }
    }

    public static function drop($id, $path)
    {
        $promotion = Promotion::find($id);
        @unlink('.' . $path . '/' . $promotion->picture);
        @unlink('.' . $path . '/thumb_' . $promotion->picture);
        $promotion->delete();
    }
}
