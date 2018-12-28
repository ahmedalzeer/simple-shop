<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[
        'title','text','price','details','user_id','country_id','category_id'
    ];

    public function images()
    {
        return $this->hasMany('App\Image','post_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function country()
    {
        return $this->belongsTo('App\Country','country_id');
    }
}
