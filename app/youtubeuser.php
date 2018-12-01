<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class youtubeuser extends Model
{
    //

    protected $primaryKey = "UserId";

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'YoutubeUser';
}
