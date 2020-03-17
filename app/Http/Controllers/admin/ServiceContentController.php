<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceContentRequest;
use App\Landing_picture;
use Illuminate\Http\Request;

class ServiceContentController extends Controller
{
    protected $path;

    public function __construct()
    {
        $this->path = '/img/servicios';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query =  Landing_picture::all();
        $path = $this->path;
        return view('admin.servicios_content.list', compact('query', 'path'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.servicios_content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceContentRequest $request)
    {
        Landing_picture::save_edit($request, $this->path);
        flash('Elemento guardado');
        return redirect('admin/service-content');
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
        $query = Landing_picture::find($id);
        $path = $this->path;
        return view('admin.servicios_content.edit', compact('query', 'path'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceContentRequest $request, $id)
    {
        Landing_picture::save_edit($request, $this->path, $id);
        flash('Elemento actualizado');
        return redirect('admin/service-content');
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
        Landing_picture::drop($id,$this->path);
        return redirect('/admin/service-content');
    }
}
