<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $fillable = [
        'users_id',
        'long_url',
        'long_url_title',
        'short_url',
        'short_url_custom',
        'views',
        'ip',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
