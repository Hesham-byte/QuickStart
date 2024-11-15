<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeaturedService extends Model implements Sortable
{
    use SoftDeletes, SortableTrait;
    protected $table = "featured_services";
    protected $fillable = [
        "title",
        "description",
        "icon",
        "active",
        "sort"
    ];
}
