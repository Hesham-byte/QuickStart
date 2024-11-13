<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class FeaturedService extends Model
{
    use SoftDeletes;
    protected $table = "featured_services";
    protected $fillable = [
        "title",
        "description",
        "icon",
        "active",
        "sort"
    ];
}
