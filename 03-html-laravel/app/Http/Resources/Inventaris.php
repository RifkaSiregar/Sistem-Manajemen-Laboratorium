<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Inventaris extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'kode' => $this->kode,
            'nama_inventaris' => $this->nama_inventaris,
            'jumlah' => $this->jumlah,
            'kondisi' => $this->kondisi,
            'status' => $this->status,
        ];
    }
}
