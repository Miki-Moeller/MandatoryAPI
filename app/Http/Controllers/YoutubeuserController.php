<?php

namespace App\Http\Controllers;


use App\youtubeuser;
use App\Http\Resources\youtubeuser as YoutubeUserResource;

class YoutubeuserController extends Controller
{

    public function show($UserId)
    {
        return new YoutubeUserResource(youtubeuser::find($UserId));
    }
}
