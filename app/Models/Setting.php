<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo_header',
        'logo_bottom',
        'logo_navbar',
        'address',
        'email',
        'phone',
        'time_schedule',
        'fb_id',
        'twitter_id',
        'linkedin_id',
        'instagram_id',
        'youtube_id',
    ];
}
