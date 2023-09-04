<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiPostRequest;
use App\Http\Resources\ApiPostResource;
use App\Models\ApiPost;
use Illuminate\Http\Request;

class ApiPostController extends Controller
{
    public function index(){
        $apiPost = ApiPost::all();
        return ApiPost::collection($apiPost);

    }

    public function create(){


    }

    public function store(ApiPostRequest $request){
        $apiPost = ApiPost::create($request->all());
        return new ApiPostResource($apiPost);

    }

    public function show(ApiPost $apiPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApiPost $apiPost)
    {
        //
    }

    public function update(ApiPostRequest $request,ApiPost $apiPost ){
        $apiPost->update($request->all());
    }

    public function destroy( ApiPost $apiPost){
       $apiPost->delete();

         return response(null, 204);
    }
}



