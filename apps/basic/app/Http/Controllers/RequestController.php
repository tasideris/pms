<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RequestController extends Controller
{
    public function showAllRequests()
    {
        return response()->json(\App\Models\Request::all());
    }

    public function showOneRequest($id)
    {
        return response()->json(\App\Models\Request::find($id));
    }

    public function create(Request $_request)
    {
        $request =  \App\Models\Request::create($_request->all());

        return response()->json($request, 201);
    }

    public function update($id, Request $_request)
    {
        $request =  \App\Models\Request::findOrFail($id);
        $request->update($_request->all());

        return response()->json($request, 200);
    }

    public function delete($id)
    {
        \App\Models\Request::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}