<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $guards = [
        'id'
    ];

    protected $fillable = [
        'thread_id',
        'name',
        'content',
    ];

    public function thread()
    {
        return $this->belongsTo('App\Thread');
    }
}
