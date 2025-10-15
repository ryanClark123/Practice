<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relationships\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class PostVotes extends Model
{
    protected $fillables = [
        "user_id",
        "post_id",
        "vote_type"
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
