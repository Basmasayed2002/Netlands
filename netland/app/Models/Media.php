<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'actor_media');
    }
}
