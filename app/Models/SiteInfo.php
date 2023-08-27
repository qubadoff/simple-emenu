<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    use HasFactory;

    protected $table = 'site_infos';

    protected $fillable = [
        'name',
        'description',
        'logo',
        'cover_photo',
        'phone',
        'email',
        'location',
        'facebook_page',
        'instagram_page',
        'tiktok_page',
        'linkedin_page',
        'twitter_page',
        'working_hours',
        'wifi_password'
    ];

    protected $guarded = [];

    protected $casts = [];
}
