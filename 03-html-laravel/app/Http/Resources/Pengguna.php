<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Pengguna extends JsonResource
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
            'nama_lengkap' => $this->nama_lengkap,
            'email' => $this->email,
            'jenis_kelamin' => $this->jenis_kelamin,
            'agama' => $this->agama,
            'alamat' => $this->alamat,
            'avatar' => $this->avatar,
         
        ];
    }
}
