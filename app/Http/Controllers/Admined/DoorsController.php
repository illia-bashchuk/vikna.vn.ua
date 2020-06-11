<?php

namespace App\Http\Controllers\Admined;

use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DoorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::where('page', 'doors')->get();
        $add_form_url = route('edit-doors.store');
        return view('admin.doors', ['photos' => $photos,
            'add_form_url' => $add_form_url]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'image|file',
            'photo_name' => 'string|nullable|max:200',
        ]);
        $path = $request->file('photo')->store('doors');
        $photo_name = $request->input('photo_name');
        $photo = new Photo;
        $url = Storage::url($path);
        $photo->photo_name = $photo_name;
        $photo->path = $path;
        $photo->url = $url;
        $photo->page = 'doors';
        $photo->save();
        return redirect()->route('edit-doors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo, $id)
    {
        $photo = $photo->find($id);
        return view('admin.components.show_photo', [
            'photo' => $photo,
            'id' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo, $id)
    {
        $photo = $photo->find($id);
        $update_url = route('edit-doors.update', ['id' => $photo->id]);
        return view('admin.components.edit_form', [
            'photo' => $photo,
            'update_url' => $update_url
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo, $id)
    {
        $request->validate([
            'photo' => 'image|file|nullable',
            'photo_name' => 'string|nullable|max:200',
        ]);
        if ($request->file('photo') == true) {
            $path = Photo::where('id', $id)->value('path');
            Storage::delete($path);
            $path = $request->file('photo')->store('doors');
            $photo_name = $request->input('photo_name');
            $photo = Photo::find($id);
            $url = Storage::url($path);
            $photo->photo_name = $photo_name;
            $photo->path = $path;
            $photo->url = $url;
            $photo->save();
        } elseif ($request->input('photo_name') != false and $request->file('photo') == false) {
            $photo_name = $request->input('photo_name');
            $photo = Photo::find($id);
            $photo->photo_name = $photo_name;
            $photo->save();
        }

        return redirect()->route('edit-doors.show', ['id' => $id]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy($photo)
    {
        $path = Photo::where('id', $photo)->value('path');
        Storage::delete($path);
        Photo::where('id', $photo)->delete();
        return redirect()->route('edit-doors.index');
    }
}
