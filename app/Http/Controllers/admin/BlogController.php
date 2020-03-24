<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Section_blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $path;

    public function __construct()
    {
        $this->path = '/img/blog';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Section_blog::all();
        $path= $this->path;
        return view('admin.blog.list', compact('query', 'path'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Section_blog::save_edit($request, $this->path);
        flash('Elemento guardado');
        return redirect('admin/blog');
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
        $query = Section_blog::find($id);
        $path = $this->path;
        return view('admin.blog.edit', compact('query', 'path'));
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
        Section_blog::save_edit($request, $this->path,  $id);
        flash('Elemento editado');
        return redirect('admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Section_blog::drop($id, $this->path);
        flash('Elemento borrado');
        return redirect('admin/blog');
    }
}
