<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['title_es', 'title_eng', 'picture'];

    public static function save_edit($request, $path, $id = '')
    {
        if($id == ''){
            $slider = new Album($request->except('_token', 'picture'));
            $slider->save();
        }else{
            $slider = Album::find($id);
            $slider->fill($request->except('_token', 'picture'));
            $slider->update();
        }

        if($request->hasFile('picture') != false) { //image is not empty coverfile
            @unlink('.'.$path.'/'.$slider->picture);
            @unlink('.'.$path. '/thumb_'.$slider->picture);
            $image_cover = $request->file('picture');
            $name_image = uploadImage($_FILES['picture'], $image_cover, '.'.$path, true, false , 255 , 257);

            $new_image = Album::find($slider->id);
            $new_image->picture = $name_image;
            $new_image->update();
        }


    }

    public static function drop($id, $path)
    {
        $slider = Album::find($id);
        @unlink('.'.$path.'/'.$slider->picture);
        @unlink('.'.$path. '/thumb_'.$slider->picture);
        $slider->delete();
    }
}
