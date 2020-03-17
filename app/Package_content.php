<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package_content extends Model
{
    protected $fillable=[ 'picture', 'title_es', 'title_eng', 'price', 'content_es', 'content_eng'];

    public static function save_edit($request, $path, $id = '')
    {
        if($id == ''){
            $slider = new Package_content($request->except('_token', 'picture'));
            $slider->save();
        }else{
            $slider = Package_content::find($id);
            $slider->fill($request->except('_token', 'picture'));
            $slider->update();
        }

        if($request->hasFile('picture') != false) { //image is not empty coverfile
            @unlink('.'.$path.'/'.$slider->picture);
            @unlink('.'.$path. '/thumb_'.$slider->picture);
            $image_cover = $request->file('picture');
            $name_image = uploadImage($_FILES['picture'], $image_cover, '.'.$path, true);

            $new_image = Package_content::find($slider->id);
            $new_image->picture = $name_image;
            $new_image->update();
        }


    }

    public static function drop($id, $path)
    {
        $slider = Package_content::find($id);
        @unlink('.'.$path.'/'.$slider->picture);
        @unlink('.'.$path. '/thumb_'.$slider->picture);
        $slider->delete();
    }
}
