<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Slider_landing;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $path;

    public function __construct()
    {
        $this->path = '/img/slider';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider_landing::all();
        $path = $this->path;
        return view('admin.slider.list', compact('sliders', 'path'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        Slider_landing::save_edit($request, $this->path);
        flash('Elemento guardado');
        return redirect('admin/slider');
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
        $slider = Slider_landing::find($id);
        $path = $this->path;
        return view('admin.slider.edit', compact('slider', 'path'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, $id)
    {
        Slider_landing::save_edit($request, $this->path, $id);
        flash('Elemento editado');
        return redirect('admin/slider');
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
        Slider_landing::drop($id,$this->path);
        return redirect('/admin/slider');
    }
}
