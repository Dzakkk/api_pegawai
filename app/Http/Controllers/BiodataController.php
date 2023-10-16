<?php

namespace App\Http\Controllers;

use App\Http\Resources\bioDetailResource;
use App\Http\Resources\bioResource;
use App\Models\biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $bio = biodata::all();
        return bioResource::collection($bio);
    }

    public function store(Request $request)
    {
        $bio = new biodata;

        $bio->nik = $request->nik;
        $bio->name = $request->name;
        $bio->gol_darah = $request->gol_darah;
        $bio->Alamat = $request->Alamat;
        $bio->Tempat_lahir = $request->Tempat_lahir;
        $bio->Tanggal_lahir = $request->Tanggal_lahir;
        $bio->no_telepon = $request->no_telepon;
        $bio->email = $request->email;
        $bio->pangkat = $request->pangkat;
        $bio->golongan = $request->golongan;
        $bio->TMT = $request->TMT;
        $bio->KD = $request->KD;
        $bio->Jabatan = $request->Jabatan;
        $bio->KGB_YAD = $request->KGB_YAD;
        $bio->TMT_pensiun = $request->TMT_pensiun;
        $bio->keterangan = $request->keterangan;

        $bio->save();
        return response()->json([
            "massage" => "Biodata added"
        ], 201);
    }

    public function update(Request $request, $nik)
    {
        if (biodata::where('nik', $nik)->exists()) {
            $bio = biodata::find($nik);
            $bio->name = is_null($request->name) ? $bio->name : $request->name;
            $bio->Jenis_kelamin = is_null($request->Jenis_kelamin) ? $bio->Jenis_kelamin : $request->Jenis_kelamin;
            $bio->status_perkawinan = is_null($request->status_perkawinan) ? $bio->status_perkawinan : $request->status_perkawinan;
            $bio->Tempat_lahir = is_null($request->Tempat_lahir) ? $bio->Tempat_lahir : $request->Tempat_lahir;
            $bio->Tanggal_lahir = is_null($request->Tanggal_lahir) ? $bio->Tanggal_lahir : $request->Tanggal_lahir;
            $bio->karpeg = is_null($request->karpeg) ? $bio->karpeg : $request->karpeg;
            $bio->TMT_KGB_terakhir = is_null($request->TMT_KGB_terakhir) ? $bio->TMT_KGB_terakhir : $request->TMT_KGB_terakhir;
            $bio->pangkat = is_null($request->pangkat) ? $bio->pangkat : $request->pangkat;
            $bio->golongan = is_null($request->golongan) ? $bio->golongan : $request->golongan;
            $bio->TMT = is_null($request->TMT) ? $bio->TMT : $request->TMT;
            $bio->KD = is_null($request->KD) ? $bio->KD : $request->KD;
            $bio->Jabatan = is_null($request->Jabatan) ? $bio->Jabatan : $request->Jabatan;
            $bio->KGB_YAD = is_null($request->KGB_YAD) ? $bio->KGB_YAD : $request->KGB_YAD;
            $bio->TMT_pensiun = is_null($request->TMT_pensiun) ? $bio->TMT_pensiun : $request->TMT_pensiun;
            $bio->keterangan = is_null($request->keterangan) ? $bio->keterangan : $request->keterangan;

            $bio->save();

            return response()->json([
                "massage" => "bio Updated"
            ], 204);
        } else {
            return response()->json([
                "massage" => "bio not found"
            ], 404);
        }
    }

    // public function show($nik)
    // {
    //     $biodata = biodata::find($nik);
    //     if (!empty($biodata)) {
    //         return response()->json($biodata);
    //     } else {
    //         return response()->json([
    //             "massage" => "Not Found"
    //         ], 404);
    //     }
    // }

    public function show($nik)
    {
        try {
            $biodata = Biodata::with('sekolah')->find($nik);

            if (!$biodata) {
                return response()->json(["message" => "Biodata not found"], 404);
            }
            return new bioDetailResource($biodata);
        } catch (\Exception $e) {
            return response()->json(["message" => "An error occurred"], 500);
        }
    }

    // public function show($nik) {
    //     $bio = biodata::with('sekolah')->findOrFail($nik);
    //     return new bioDetailResource($bio);

    // }



    public function destroy($nik)
    {
        if (biodata::where('nik', $nik)->exists()) {
            $biodata = biodata::find($nik);
            $biodata->delete();

            return response()->json([
                "massage" => "biodata deleted"
            ], 202);
        } else {

            return response()->json([
                "massage" => "biodata not found"
            ], 404);
        }
    }

}