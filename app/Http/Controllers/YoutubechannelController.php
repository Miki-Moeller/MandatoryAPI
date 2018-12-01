<?php

namespace App\Http\Controllers;


use App\youtubechannel;
use App\Http\Resources\youtubechannel as YoutubechannelResource;


class YoutubechannelController extends Controller
{
    public function show($id)
    {
        return new YoutubechannelResource(youtubechannel::find($id));
    }
}
