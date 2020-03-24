<?php

namespace App\Http\Controllers\admin;

use App\Blog_picture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogPictureController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($blog_id)
    {
        return view('admin.blog_pictures.create', compact('blog_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Blog_picture::save_edit($request, $this->path);
        flash('Elemento guardado');
        return redirect('admin/blog-picture/'.$request->blog_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs = Blog_picture::where('blog_id', $id)->get();
        $path = $this->path;
        return view('admin.blog_pictures.list', compact('blogs', 'id', 'path'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $blog_id)
    {
        $query = Blog_picture::find($id);
        $path = $this->path;
        return view('admin.blog_pictures.edit',compact('blog_id', 'query', 'id', 'path'));
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
        Blog_picture::save_edit($request, $this->path, $id);
        flash('Elemento guardado');
        return redirect('admin/blog-picture/'.$request->blog_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Blog_picture::drop($id, $this->path);
        flash('Elemento borrado');
        return redirect('admin/blog-picture/'.$event);
    }
}
