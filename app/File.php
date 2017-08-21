<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    protected $fillables =[
        'title',
        'overview_short',
        'overview',
        'state',
        'category',
        'price',
        'live',
        'approved',
        'finished'
    ];
    public function getRouteKeyName(){
        return 'identifier';
    }

    //file relationship with user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
