<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasUuids;

    protected $table = "posts";
    protected $keyType = "string";
    public $incrementing = false;

    protected $fillable = [
        'content',
        'post_id'
    ];

    protected $gurded = [
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
