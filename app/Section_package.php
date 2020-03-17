<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section_package extends Model
{
    protected $fillable = ['title_es', 'title_eng', 'subtitle_es', 'subtitle_eng'];

    public static function save_edit($request,  $id = '')
    {
        if($id == ''){
            $slider = new Section_package($request->except('_token'));
            $slider->save();
        }else{
            $slider = Section_package::find($id);
            $slider->fill($request->except('_token'));
            $slider->update();
        }
    }

    public static function drop($id)
    {
        $slider = Section_package::find($id);
        $slider->delete();
    }

}
