<?php

namespace App\Http\Controllers\admin;

use App\Event_picture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventPicturesController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($event_id)
    {
        return view('admin.event_pictures.create', compact('event_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Event_picture::save_edit($request, $this->path);
        flash('Elemento guardado');
        return redirect('admin/event-picture/'.$request->event_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pictures = Event_picture::where('event_id', $id)->get();
        $path = $this->path;
        return view('admin.event_pictures.list', compact('pictures', 'id', 'path'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $event_id)
    {
        $query = Event_picture::find($id);
        $path = $this->path;
        return view('admin.event_pictures.edit',compact('event_id', 'query', 'id', 'path'));
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
        Event_picture::save_edit($request, $this->path, $id);
        flash('Elemento guardado');
        return redirect('admin/event-picture/'.$request->event_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event_picture::drop($id, $this->path);
        flash('Elemento borrado');
        return redirect('admin/event-picture/'.$event);
    }
}
