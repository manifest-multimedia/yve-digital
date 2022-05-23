<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'release',
        'genre',
        'song', 
        'song_url', 
        'username',
        'record_lable',
        'artist',
        'status',
        'release_date',
        'user_id',
    ]; 
}
