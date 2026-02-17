<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasUuids;

    protected $table = "posts";
    protected $keyType = "string";
    public $incrementing = false;

    protected $fillable = [
        "title",
        "content",
        "status",
    ];

    protected $gurded = [
        'author_id'
    ];
}
