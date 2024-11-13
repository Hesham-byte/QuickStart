<?php

namespace App\Models;

use Spatie\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\SortableTrait;

class About extends Model implements Sortable
{
    use SoftDeletes, SortableTrait;
    protected $table = "abouts";
    protected $fillable = [
        "description",
        "active",
        "sort"
    ];
}
