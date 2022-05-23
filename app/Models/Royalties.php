<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\UserScope;

class Royalties extends Model
{
    use HasFactory;

    protected $fillable = [
        'username', 
        'song_name', 
        'downloads',
        'revenue', 
        'period_gained', 
        'platform',
        'total_streams', 
        'user_id',
        


    ];

    protected static function booted()
    {
        static::addGlobalScope(new UserScope);
    }
}
