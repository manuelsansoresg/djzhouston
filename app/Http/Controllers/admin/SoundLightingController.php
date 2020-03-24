<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Section_sound_lights;
use Illuminate\Http\Request;

class SoundLightingController extends Controller
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
        $query = Section_sound_lights::all();
        $path= $this->path;
        return view('admin.sound_lighting.list', compact('query', 'path'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.sound_lighting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Section_sound_lights::save_edit($request, $this->path);
        flash('Elemento guardado');
        return redirect('admin/sound-lighting');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query = Section_sound_lights::find($id);
        $path = $this->path;
        return view('admin.sound_lighting.edit', compact('query', 'path'));
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
        Section_sound_lights::save_edit($request, $this->path,  $id);
        flash('Elemento editado');
        return redirect('admin/sound-lighting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Section_sound_lights::drop($id, $this->path);
        flash('Elemento borrado');
        return redirect('admin/sound-lighting');
    }
}
