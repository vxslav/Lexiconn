<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [

        'heading', 'text', 'author',

    ];

    public function user() {
        return $this->belongsTo('App\Model\User');
    }
    
}

