<?php

use App\Http\Controllers\Controller;
use App\Http\Requests\PhotoRequest;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function index()
    {
        return Photo::all();
    }

    public function store(PhotoRequest $request)
    {
        return Photo::create($request->validated());
    }

    public function show(Photo $photo)
    {
        return $photo = Photo::findOrFail($photo);
    }

    public function update(PhotoRequest $request, $id)
    {
        $photo = Photo::findOrFail($id);
        $photo->fill($request->except(['id']));
        $photo->save();

        return response()->json($photo);
    }

    public function destroy(PhotoRequest $request, $id)
    {
        $photo = Photo::findOrFail($id);
        if($photo->delete()) {
            return response(null, 204);
        }
    }
}
