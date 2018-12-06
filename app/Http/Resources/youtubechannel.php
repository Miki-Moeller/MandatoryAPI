<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class youtubechannel extends JsonResource
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
            'ChannelId' => $this->ChannelId,
            'Followers'=>$this->Followers,
            'Likes'=>$this->Likes,
            'NumberOfComments'=>$this->NumberOfComments,
            'Subscribers'=>$this->Subscribers,
            'Views'=>$this->Views,
            'UserId'=>$this->UserId,
        ];
    }
}
