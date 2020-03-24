<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = ['title_es', 'title_eng', 'content_es', 'content_eng', 'picture', ''];

    public static function save_edit($request, $path,  $id = '')
    {
        if($id == ''){
            $slider           = new Blog($request->except('_token', 'picture'));
            $slider->slug_es  = Str::slug($request->title_es);
            $slider->slug_eng = Str::slug($request->title_eng);
            $slider->save();
        }else{
            $slider = Blog::find($id);
            $slider->fill($request->except('_token', 'picture'));
            $slider->slug_es  = Str::slug($request->title_es);
            $slider->slug_eng = Str::slug($request->title_eng);

            $slider->update();
        }

        if($request->hasFile('picture') != false) { //image is not empty coverfile
            @unlink('.'.$path.'/'.$slider->picture);
            @unlink('.'.$path. '/thumb_'.$slider->picture);
            $image_cover = $request->file('picture');
            $name_image = uploadImage($_FILES['picture'], $image_cover, '.'.$path, true, false,350 , 185 );

            $new_image = Blog::find($slider->id);
            $new_image->picture = $name_image;
            $new_image->update();
        }

    }

    public static function drop($id, $path)
    {
        $slider = Blog::find($id);
        @unlink('.'.$path.'/'.$slider->picture);
        @unlink('.'.$path. '/thumb_'.$slider->picture);
        $slider->delete();
    }
}
