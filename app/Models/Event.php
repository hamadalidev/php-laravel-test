<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name'];

    public function workShops()
    {
        return $this->hasMany(Workshop::class, 'event_id', 'id');
    }
}
