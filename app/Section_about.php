<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section_about extends Model
{
    protected $fillable = ['title_es', 'title_eng', 'subtitle_es', 'subtitle_eng', 'content_es', 'content_eng'];

    public static function save_edit($request, $path,  $id = '')
    {
        if($id == ''){
            $slider = new Section_about($request->except('_token'));
            $slider->save();
        }else{
            $slider = Section_about::find($id);
            $slider->fill($request->except('_token'));
            $slider->update();
        }

        if($request->hasFile('picture') != false) { //image is not empty coverfile
            @unlink('.'.$path.'/'.$slider->picture);
            @unlink('.'.$path. '/thumb_'.$slider->picture);
            $image_cover = $request->file('picture');
            $name_image = uploadImage($_FILES['picture'], $image_cover, '.'.$path, true);

            $new_image = Section_about::find($slider->id);
            $new_image->picture = $name_image;
            $new_image->update();
        }

        if($request->hasFile('music') != false) {
            $music            = $request->file('music');
            $extension        = $music->getClientOriginalExtension();
            $name_full        =  time() . '.' . $extension;
            $music->move('.'.$path, $name_full);

            $new_image = Section_about::find($slider->id);
            $new_image->music = $name_full;
            $new_image->update();
        }
    }

    public static function drop($id,$path)
    {
        $slider = Section_about::find($id);
        @unlink('.'.$path.'/'.$slider->picture);
        @unlink('.'.$path. '/thumb_'.$slider->picture);
        @unlink('.'.$path. '/'.$slider->music);
        $slider->delete();
    }
}
