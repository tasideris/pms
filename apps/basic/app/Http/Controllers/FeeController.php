<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fee;

class FeeController extends Controller
{
    public function showAllFees()
    {
        return response()->json(Fee::all());
    }

    public function showOneFee($id)
    {
        return response()->json(Fee::find($id));
    }

    public function create(Request $request)
    {
        $fee = Fee::create($request->all());

        return response()->json($fee, 201);
    }

    public function update($id, Request $request)
    {
        $fee = Fee::findOrFail($id);
        $fee->update($request->all());

        return response()->json($fee, 200);
    }

    public function delete($id)
    {
        Fee::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}