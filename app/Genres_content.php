<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres_content extends Model
{
    protected $fillable = ['title_es', 'title_eng', 'picture', 'music'];

    public static function save_edit($request, $path, $id = '')
    {
        if($id == ''){
            $slider = new Genres_content($request->except('_token', 'picture', 'music'));
            $slider->save();
        }else{
            $slider = Genres_content::find($id);
            $slider->fill($request->except('_token', 'picture', 'music'));
            $slider->update();
        }

        if($request->hasFile('picture') != false) { //image is not empty coverfile
            @unlink('.'.$path.'/'.$slider->picture);
            @unlink('.'.$path. '/thumb_'.$slider->picture);
            $image_cover = $request->file('picture');
            $name_image = uploadImage($_FILES['picture'], $image_cover, '.'.$path, true);

            $new_image = Genres_content::find($slider->id);
            $new_image->picture = $name_image;
            $new_image->update();
        }

        if($request->hasFile('music') != false) {
            $music            = $request->file('music');
            $extension        = $music->getClientOriginalExtension();
            $name_full        =  time() . '.' . $extension;
            $music->move('.'.$path, $name_full);

            $new_image = Genres_content::find($slider->id);
            $new_image->music = $name_full;
            $new_image->update();
        }
    }

    public static function drop($id, $path)
    {
        $slider = Genres_content::find($id);
        @unlink('.'.$path.'/'.$slider->picture);
        @unlink('.'.$path. '/thumb_'.$slider->picture);
        @unlink('.'.$path. '/'.$slider->music);
        $slider->delete();
    }
}
