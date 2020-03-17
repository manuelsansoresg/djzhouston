<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landing_picture extends Model
{
    protected $fillable = ['title_es', 'title_eng', 'picture'];

    public static function save_edit($request, $path, $id = '')
    {
        if($id == ''){
            $slider = new Landing_picture($request->except('_token', 'picture'));
            $slider->save();
        }else{
            $slider = Landing_picture::find($id);
            $slider->fill($request->except('_token', 'picture'));
            $slider->update();
        }

        if($request->hasFile('picture') != false) { //image is not empty coverfile
            @unlink('.'.$path.'/'.$slider->picture);
            @unlink('.'.$path. '/thumb_'.$slider->picture);
            $image_cover = $request->file('picture');
            $name_image = uploadImage($_FILES['picture'], $image_cover, '.'.$path, true);

            $new_image = Landing_picture::find($slider->id);
            $new_image->picture = $name_image;
            $new_image->update();
        }
    }

    public static function drop($id, $path)
    {
        $slider = Landing_picture::find($id);
        @unlink('.'.$path.'/'.$slider->picture);
        @unlink('.'.$path. '/thumb_'.$slider->picture);
        $slider->delete();
    }
}
