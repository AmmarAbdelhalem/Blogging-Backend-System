<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasUuids;

    protected $table = "tags";
    protected $keyType = "string";
    public $incrementing = false;

    protected $fillable = [
        'name'
    ];

    public function posts() {
        return $this->belongsToMany(Post::class);
    }
}
