<?php

namespace App\Http\Controllers\admin;

use App\Event;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventContentRequest;
use Illuminate\Http\Request;

class EventContentController extends Controller
{

    protected $path;

    public function __construct()
    {
        $this->path = '/img/eventos';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Event::all();
        $path = $this->path;
        return view('admin.event_content.list', compact('query', 'path'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event_content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventContentRequest $request)
    {
        Event::save_edit($request, $this->path);
        flash('Elemento guardado');
        return redirect('admin/event-content');
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
        $query = Event::find($id);
        $path = $this->path;
        return view('admin.event_content.edit', compact('query', 'path'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventContentRequest $request, $id)
    {
        Event::save_edit($request, $this->path,  $id);
        flash('Elemento editado');
        return redirect('admin/event-content');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::drop($id, $this->path);
        flash('Elemento borrado');
        return redirect('admin/event-content');
    }
}
