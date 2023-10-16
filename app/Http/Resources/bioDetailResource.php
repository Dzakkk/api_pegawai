<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class bioDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
{
    // Create a DateTime object

    return [
        'nik' => $this->nik,
        'name' => $this->name,
        'nip' => $this->nip,
        'pangkat' => $this->pangkat,
        'golongan' => $this->golongan,
        'Jabatan' => $this->Jabatan,
        'TMT_KGB_terakhir' => $this->TMT_KGB_terakhir,
        'karpeg' => $this->karpeg,
        'Tempat_lahir' => $this->Tempat_lahir,
        'Tanggal_lahir' => $this->Tanggal_lahir,
        'Jenis_kelamin' => $this->Jenis_kelamin,
        'pangkat' => $this->pangkat,
        'golongan' => $this->golongan,
        'TMT' => $this->TMT,
        'KGB_YAD' => $this->KGB_YAD,
        'TMT_pensiun' => $this->TMT_pensiun,
        'sekolah' => $this->whenLoaded('sekolah'),
    ];
    }
}
