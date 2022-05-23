<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\UserScope;

class Release extends Model
{
    use HasFactory;

    protected $fillable = [
        'release_name', 
        'genre', 
        'cover_art',
        'artist_name',
        'territory', 
        'releasedate', 
        'record_label',
        'number_of_songs',
        'username',
        'user_id',
    ];

    protected static function booted()
    {
        static::addGlobalScope(new UserScope);
    }

}
