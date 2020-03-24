<?php

namespace App\Http\Controllers\admin;

use App\Event_picture;
use App\Http\Controllers\Controller;
use App\Sound_lights;
use App\Sound_lights_pictures;
use Illuminate\Http\Request;

class SoundLightPictureController extends Controller
{
    protected $path;

    public function __construct()
    {
        $this->path = '/img/soundlight';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($sound_light_id)
    {
        return view('admin.sound_light_pictures.create', compact('sound_light_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sound_lights_pictures::save_edit($request, $this->path);
        flash('Elemento guardado');
        return redirect('admin/sound-lighting-picture/'.$request->sound_light_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pictures = Sound_lights_pictures::where('sound_light_id', $id)->get();
        $path = $this->path;
        return view('admin.sound_light_pictures.list', compact('pictures', 'id', 'path'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $sound_light_id)
    {
        $query = Sound_lights_pictures::find($id);

        $path = $this->path;
        return view('admin.sound_light_pictures.edit',compact('sound_light_id', 'query', 'id', 'path'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Sound_lights_pictures::save_edit($request, $this->path, $id);
        flash('Elemento guardado');
        return redirect('admin/sound-lighting-picture/'.$request->sound_light_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Sound_lights_pictures::drop($id, $this->path);
        flash('Elemento borrado');
        return redirect('admin/sound-lighting-picture/'.$event);
    }
}
