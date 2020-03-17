<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageContentRequest;
use App\Package_content;
use Illuminate\Http\Request;

class PackageContentController extends Controller
{
    protected $path;

    public function __construct()
    {
        $this->path = '/img/paquetes';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query =  Package_content::all();
        $path = $this->path;
        return view('admin.package_content.list', compact('query', 'path'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package_content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageContentRequest $request)
    {
        Package_content::save_edit($request, $this->path);
        flash('Elemento guardado');
        return redirect('admin/package-content');
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
        $query = Package_content::find($id);
        $path = $this->path;
        return view('admin.package_content.edit', compact('query', 'path'));
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
        Package_content::save_edit($request, $this->path, $id);
        flash('Elemento actualizado');
        return redirect('admin/package-content');
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
        Package_content::drop($id,$this->path);
        return redirect('/admin/package-content');
    }
}
