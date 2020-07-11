<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhotoRequest;
use App\Models\Photo;

class PhotoController extends Controller
{
    /**
     * @return Photo[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Photo::all();
    }

    /**
     * @param PhotoRequest $request
     * @return mixed
     */
    public function store(PhotoRequest $request)
    {
        return Photo::create($request->validated());
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function show(int $id)
    {
        $photo = Photo::find($id);
        if (empty($photo)) {
            return response(['message' => 'Photo not found'], 404);
        }
        return $photo;
    }

    /**
     * @param PhotoRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PhotoRequest $request, $id)
    {
        $photo = Photo::findOrFail($id);
        $photo->fill($request->except(['id']));
        $photo->save();

        return response()->json($photo);
    }

    /**
     * @param PhotoRequest $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function destroy(PhotoRequest $request, $id)
    {
        $photo = Photo::findOrFail($id);
        if($photo->delete()) {
            return response(null, 204);
        }
    }
}
