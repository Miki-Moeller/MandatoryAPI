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
            'Userid' => $this->UserId,
            'Followers'=>$this->followers,
            'Likes'=>$this->likes,
            'NumberOfComments'=>$this->numberOfComments,
            'Subscribers'=>$this->subscribers,
            'Views'=>$this->views,
            'ChannelId'=>$this->channelId,

        ];
    }
}
