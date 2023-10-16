<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class bioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'nik' => $this->nik,
            'name' => $this->name,
            'pangkat' => $this->pangkat,
            'golongan' => $this->golongan,
            'Jabatan' => $this->Jabatan,
        ];
    }
}
