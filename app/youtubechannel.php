<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class youtubechannel extends Model
{
    protected $primaryKey = "ChannelId";

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'YoutubeChannel';
}
