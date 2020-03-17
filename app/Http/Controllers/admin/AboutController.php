<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Section_about;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    protected $path;

    public function __construct()
    {
        $this->path = '/img/about';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Section_about::all();
        $path = $this->path;
        return view('admin.about.list', compact('query', 'path'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutRequest $request)
    {
        Section_about::save_edit($request, $this->path);
        flash('Elemento guardado');
        return redirect('admin/about');
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
        $query = Section_about::find($id);
        $path = $this->path;
        return view('admin.about.edit', compact('query', 'path'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutRequest $request, $id)
    {
        Section_about::save_edit($request, $this->path, $id);
        flash('Elemento actualizado');
        return redirect('admin/about');
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
        Section_about::drop($id,$this->path);
        return redirect('/admin/about');
    }
}
