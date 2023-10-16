<?php

namespace App\Http\Controllers;

use App\Models\pendidikan;
use Illuminate\Http\Request;

class pendidikanController extends Controller
{

    public function index()
    {
        $didik = pendidikan::all();
        return response()->json($didik);
    }

    public function store(Request $request)
    {
        $didik = new pendidikan;

        $didik->IdPendidikan = $request->IdPendidikan;
        $didik->nama_pendidikan = $request->nama_pendidikan;
        $didik->tanggalLulus = $request->tanggalLulus;
        
        $didik->save();
        return response()->json([
            "massage" => "pendidikan added"
        ], 201);
    }

    public function update(Request $request, $id)
{
    $didik = Pendidikan::find($id);

    if (!$didik) {
        return response()->json([
            "message" => "Didik not found"
        ], 404);
    }

    $didik->nama_pendidikan = $request->input('nama_pendidikan', $didik->nama_pendidikan);
    $didik->tanggalLulus = $request->input('tanggalLulus', $didik->tanggalLulus);

    $didik->save();

    return response()->json([
        "message" => "Didik updated"
    ], 204);
}

    public function destroy($IdPendidikan)
    {
        if (pendidikan::where('IdPendidikan', $IdPendidikan)->exists()) {
            $pendidikan = pendidikan::find($IdPendidikan);
            $pendidikan->delete();

            return response()->json([
                "massage" => "pendiidkan deleted"
            ], 202);
        } else {

            return response()->json([
                "massage" => "pendiidkan not found"
            ], 404);
        }
    }
}
