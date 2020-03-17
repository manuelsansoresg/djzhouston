<?php

namespace App\Http\Controllers\admin;

use App\Genres_content;
use App\Http\Controllers\Controller;
use App\Http\Requests\GenreContentRequest;
use Illuminate\Http\Request;

class GenreContentController extends Controller
{
    protected $path;

    public function __construct()
    {
        $this->path = '/img/genero';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query =  Genres_content::all();
        $path = $this->path;
        return view('admin.genres_content.list', compact('query', 'path'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.genres_content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GenreContentRequest $request)
    {
        Genres_content::save_edit($request, $this->path);
        flash('Elemento guardado');
        return redirect('admin/genre-content');
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
        $query = Genres_content::find($id);
        $path = $this->path;
        return view('admin.genres_content.edit', compact('query', 'path'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GenreContentRequest $request, $id)
    {
        Genres_content::save_edit($request, $this->path, $id);
        flash('Elemento actualizado');
        return redirect('admin/genre-content');
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
        Genres_content::drop($id,$this->path);
        return redirect('/admin/genre-content');
    }
}
