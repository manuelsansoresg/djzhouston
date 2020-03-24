<?php

namespace App\Http\Controllers\admin;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogContentController extends Controller
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
        $query = Blog::all();
        $path= $this->path;
        return view('admin.blog_content.list', compact('query', 'path'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.blog_content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Blog::save_edit($request, $this->path);
        flash('Elemento guardado');
        return redirect('admin/blog-content');
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
        $query = Blog::find($id);
        $path = $this->path;
        return view('admin.blog_content.edit', compact('query', 'path'));
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
        Blog::save_edit($request, $this->path,  $id);
        flash('Elemento editado');
        return redirect('admin/blog-content');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::drop($id, $this->path);
        return redirect('admin/blog-content');
    }
}
