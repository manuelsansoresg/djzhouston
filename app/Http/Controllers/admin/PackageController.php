<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequest;
use App\Section_package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    protected $path;

    public function __construct()
    {
        $this->path = '/img/paquete';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Section_package::all();
        return view('admin.package.list', compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageRequest $request)
    {
        Section_package::save_edit($request);
        flash('Elemento guardado');
        return redirect('admin/package');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query = Section_package::find($id);
        return view('admin.package.edit', compact('query'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PackageRequest $request, $id)
    {
        Section_package::save_edit($request,  $id);
        flash('Elemento actualizado');
        return redirect('admin/package');
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
        Section_package::drop($id,$this->path);
        return redirect('/admin/package');
    }
}
