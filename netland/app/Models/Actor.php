<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function media()
    {
        return $this->belongsToMany(Media::class, 'actor_media');
    }
}
