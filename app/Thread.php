<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $guards = [
        'id'
    ];
    
    protected $fillable = [
        'name',
        'title',
        'content',
    ];

    public function entries()
    {
        return $this->hasMany('App\Entry');
    }
}
