<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    protected $path;

    public function __construct()
    {
        $this->path = '/img/promotion';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotion::all();
        $path = $this->path;
        return view('admin.promotion.list', compact('promotions', 'path'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.promotion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Promotion::save_edit($request, $this->path);
        flash('Elemento guardado');
        return redirect('admin/promotion');
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
        $promotion = Promotion::find($id);
        $path = $this->path;
        return view('admin.promotion.edit', compact('promotion', 'path'));
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
        Promotion::save_edit($request, $this->path, $id);
        flash('Elemento editado');
        return redirect('admin/promotion');
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
        Promotion::drop($id, $this->path);
        return redirect('/admin/promotion');
    }
}
