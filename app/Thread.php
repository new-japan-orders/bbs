<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $guards = [
        'id'
    ];
    
    protected $fillable = [
        'user_id',
        'name',
        'title',
        'content',
    ];

    public function entries()
    {
        return $this->hasMany('App\Entry');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
