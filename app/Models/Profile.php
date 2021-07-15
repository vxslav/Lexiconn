<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'age', 'description', 'education',
        'address', 'job','movies', 'music',
        'hobbies', 'likes', 'dislikes',
        'goals', 'dreams', 'faq', 'user_id',
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


}
