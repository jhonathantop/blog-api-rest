<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogSocialNetwork extends Model
{
    protected $fillable = [
        'url', 'type_id'
    ];

    protected $table = 'blog_social_networks';
}
