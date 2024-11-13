<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutHeader extends Model
{
    use SoftDeletes;
    protected $table = "about_headers";
    protected $fillable = [
        "title",
        "description",
        "active"
    ];
}
