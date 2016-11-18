<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealPicture extends Model
{
    protected $fillable = [
        'url'
    ];

    public function meal()
    {
        return $this->belongsTo('App\Meal');
    }
}
