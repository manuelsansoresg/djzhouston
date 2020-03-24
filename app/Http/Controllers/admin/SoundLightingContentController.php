<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Sound_lights;
use Illuminate\Http\Request;

class SoundLightingContentController extends Controller
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
        $query = Sound_lights::all();
        $path= $this->path;
        return view('admin.soundlight_content.list', compact('query', 'path'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.soundlight_content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sound_lights::save_edit($request, $this->path);
        flash('Elemento guardado');
        return redirect('admin/sound-lighting-content');
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
        $query = Sound_lights::find($id);
        $path = $this->path;
        return view('admin.soundlight_content.edit', compact('query', 'path'));
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
        Sound_lights::save_edit($request, $this->path,  $id);
        flash('Elemento editado');
        return redirect('admin/sound-lighting-content');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sound_lights::drop($id, $this->path);
        return redirect('admin/sound-lighting-content');
    }
}
