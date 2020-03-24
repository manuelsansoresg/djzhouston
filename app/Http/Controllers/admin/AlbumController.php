<?php

namespace App\Http\Controllers\admin;

use App\Album;
use App\Http\Controllers\Controller;
use App\Http\Requests\AlbumRequest;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    protected $path;

    public function __construct()
    {
        $this->path = '/img/album';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Album::all();
        $path = $this->path;
        return view('admin.album.list', compact('query', 'path'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlbumRequest $request)
    {
        Album::save_edit($request, $this->path);
        flash('Elemento guardado');
        return redirect('admin/album');
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
        $query = Album::find($id);
        $path = $this->path;
        return view('admin.album.edit', compact('query', 'path'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlbumRequest $request, $id)
    {
        Album::save_edit($request, $this->path, $id);
        flash('Elemento actualizado');
        return redirect('admin/album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        flash('Elemento borrado');
        Album::drop($id,$this->path);
        return redirect('/admin/album');
    }
}
