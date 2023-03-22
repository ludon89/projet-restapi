<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\HearingAid;
use Illuminate\Http\Request;

class HearingAidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hearingAids = HearingAid::all();

        return response()->json($hearingAids);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return HearingAid::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return response()->json(HearingAid::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HearingAid $hearingAid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HearingAid $hearingAid)
    {
        //
    }
}
