<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\HearingAid;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class HearingAidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        $dataWithAttributes = HearingAid::with('attributes')->get();

        return $dataWithAttributes;
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
        $dataWithAttributes = HearingAid::with('attributes')->find($id);

        return $dataWithAttributes;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $hearingAid = HearingAid::find($id);
        $hearingAid->update($request->all());
        return $hearingAid;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $id = HearingAid::findOrFail($id);

        $id->delete();

        return response()->json();
    }
}
