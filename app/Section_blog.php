<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section_blog extends Model
{
    protected $fillable = ['title_es', 'title_eng', 'subtitle_es', 'subtitle_eng', 'picture'];

    public static function save_edit($request, $path,  $id = '')
    {
        if($id == ''){
            $slider           = new Section_blog($request->except('_token', 'picture'));
            $slider->save();
        }else{
            $slider = Section_blog::find($id);
            $slider->fill($request->except('_token', 'picture'));

            $slider->update();
        }

        if($request->hasFile('picture') != false) { //image is not empty coverfile
            @unlink('.'.$path.'/'.$slider->picture);
            @unlink('.'.$path. '/thumb_'.$slider->picture);
            $image_cover = $request->file('picture');
            $name_image = uploadImage($_FILES['picture'], $image_cover, '.'.$path, true, false,350 , 185 );

            $new_image = Section_blog::find($slider->id);
            $new_image->picture = $name_image;
            $new_image->update();
        }

    }

    public static function drop($id, $path)
    {
        $slider = Section_blog::find($id);
        @unlink('.'.$path.'/'.$slider->picture);
        @unlink('.'.$path. '/thumb_'.$slider->picture);
        $slider->delete();
    }
}
