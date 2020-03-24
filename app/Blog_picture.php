<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_picture extends Model
{
    protected $fillable = ['blog_id', 'type', 'video', 'picture_video'];
    protected $table = 'blogs_pictures';
    public static function save_edit($request, $path, $id = '')
    {

        if($id == ''){
            $slider = new Blog_picture($request->except('_token', 'picture'));
            $slider->save();
        }else{
            $slider = Blog_picture::find($id);
            $slider->fill($request->except('_token', 'picture'));
            $slider->update();
        }

        if($request->hasFile('picture') != false) { //image is not empty coverfile
            @unlink('.'.$path.'/'.$slider->picture);
            @unlink('.'.$path. '/thumb_'.$slider->picture);
            $image_cover = $request->file('picture');
            $name_image = uploadImage($_FILES['picture'], $image_cover, '.'.$path, true, false, 255 , 257);

            $new_image = Blog_picture::find($slider->id);
            $new_image->picture = $name_image;
            $new_image->update();
        }

        if($request->hasFile('picture_video') != false) { //image is not empty coverfile
            @unlink('.'.$path.'/'.$slider->picture_video);
            @unlink('.'.$path. '/thumb_'.$slider->picture_video);
            $image_cover = $request->file('picture_video');
            $name_image = uploadImage($_FILES['picture_video'], $image_cover, '.'.$path, true, false, 255 , 257);

            $new_image = Blog_picture::find($slider->id);
            $new_image->picture_video = $name_image;
            $new_image->update();
        }


    }

    public static function drop($id, $path)
    {
        $slider = Blog_picture::find($id);
        $event_id = $slider->blog_id;
        @unlink('.'.$path.'/'.$slider->picture);
        @unlink('.'.$path. '/thumb_'.$slider->picture);

        @unlink('.'.$path.'/'.$slider->picture_video);
        @unlink('.'.$path. '/thumb_'.$slider->picture_video);
        $slider->delete();

        return $event_id;

    }
}
