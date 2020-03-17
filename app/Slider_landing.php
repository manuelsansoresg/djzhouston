<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider_landing extends Model
{
    protected $fillable = ['title_es', 'title_eng', 'subtitle_es', 'subtitle_eng'];

    public static function save_edit($request, $path, $id = '')
    {
        if($id == ''){
            $slider = new Slider_landing($request->except('_token', 'picture'));
            $slider->save();
        }else{
            $slider = Slider_landing::find($id);
            $slider->fill($request->except('_token', 'picture'));
            $slider->update();
        }

        if($request->hasFile('picture') != false) { //image is not empty coverfile
            @unlink('.'.$path.'/'.$slider->picture);
            @unlink('.'.$path. '/thumb_'.$slider->picture);
            $image_cover = $request->file('picture');
            $name_image = uploadImage($_FILES['picture'], $image_cover, '.'.$path, true);

            $new_image = Slider_landing::find($slider->id);
            $new_image->picture = $name_image;
            $new_image->update();
        }
    }

    public static function drop($id, $path)
    {
        $slider = Slider_landing::find($id);
        @unlink('.'.$path.'/'.$slider->picture);
        @unlink('.'.$path. '/thumb_'.$slider->picture);
        $slider->delete();
    }
}
