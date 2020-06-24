<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title_list = [
            'ourworks' => 'Наші роботи',
            'windows' => 'Вікна металопластикові',
            'doors' => 'Двері металопластикові',
            'catalog' => 'Каталог',
            'profile' => 'Профіль',
            'furniture' => 'Фурнітура',
            'sale' => 'Розпродаж',
            'dstu' => 'Монтаж згідно ДСТУ',
            'windowsill' => 'Підвіконники та відливи',
            'antitheft' => 'Протизламні вікна',
            'aluminium' => 'Двері алюмінієві',
            'roller' => 'Захисні ролети',
            'gates' => 'Гаражні ворота',
            'warranty' => 'Гарантія та ремонт',

        ];
        $request->validate([
            'page' => 'string|max:20|alpha',
        ]);
        $page = $request->get('page');
        $add_form_url = url("/admin/edit?page={$page}");
        $photos = Photo::where('page', $page)->get();
        return view('admin.components.show_photos', [
            'photos' => $photos,
            'title' => $title_list[$page],
            'add_form_url' => $add_form_url,

        ]);
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
            'page' => 'string|max:20|alpha',
        ]);
        $page = $request->get('page');
        $path = $request->file('photo')->store($page);
        if (!file_exists(public_path("thumbnail/{$page}"))) {
            mkdir(public_path("thumbnail/{$page}"), 0755);
        }
        Image::make($request->file('photo'))->resize(null, 300, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path("thumbnail/{$path}"), 90);
        $photo_name = $request->input('photo_name');
        $photo = new Photo;
        $url = Storage::url($path);
        $photo->photo_name = $photo_name;
        $photo->path = $path;
        $photo->url = $url;
        $photo->page = $page;
        $photo->save();
        return redirect("/admin/edit?page={$page}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Photo $photo, $id)
    {
        $photo = $photo->find($id);
        return view('admin.components.show_photo', [
            'photo' => $photo,
            'id' => $id,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Photo $photo, $id)
    {
        $photo = $photo->find($id);
        $update_url = route('edit.update', ['id' => $photo->id]);
        return view('admin.components.edit_form', [
            'photo' => $photo,
            'update_url' => $update_url,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo, $id)
    {
        $request->validate([
            'photo' => 'image|file|nullable',
            'photo_name' => 'string|nullable|max:200',
            'page' => 'string|max:20|alpha',
        ]);

        if ($request->file('photo') == true) {
            $path = Photo::where('id', $id)->value('path');
            Storage::delete($path);
            if (!file_exists(public_path("thumbnail/{$path}"))) {
                unlink(public_path("thumbnail/{$path}"));
            }
            $page = $request->input('page');
            $path = $request->file('photo')->store($page);
            Image::make($request->file('photo'))->resize(null, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path("thumbnail/{$path}"), 90);
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

        return redirect()->route('edit.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $photo)
    {
        $request->validate([
            'page' => 'string|max:20|alpha',
        ]);
        $page = $request->get('page');
        $path = Photo::where('id', $photo)->value('path');
        Storage::delete($path);
        if (!file_exists(public_path("thumbnail/{$path}"))) {
            unlink(public_path("thumbnail/{$path}"));
        }
        Photo::where('id', $photo)->delete();
        return redirect("/admin/edit?page={$page}");
    }
}
