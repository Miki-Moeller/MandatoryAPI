<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class youtubeuser extends JsonResource
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
            'UserId' => $this->UserId,
            'Username' => $this->Username,
            'Password'=> $this->Password,
            'Firstname'=>$this->Firstname,
            'Lastname'=>$this->Lastname,
            'Birthday'=>$this->Birthday,
            'ChannelId'=>$this->ChannelId,
            'KeyId'=>$this->KeyId,
        ];
    }

}
