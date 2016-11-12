<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    public function chef()
    {
        return $this->belongsTo('App\Chef');
    }
}
