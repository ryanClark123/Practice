<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "title",
        "content",
        "user_id"
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

   public function users(){
        return $this->belongsToMany(
            User::class,
            table: "post_votes",
            foreignPivotKey: "post_id",
            relatedPivotKey: "user_id",
        )->withPivot('post_id','user_id', 'vote_Type');
    }

    public function upvotes(){
        return $this->users()->wherePivot('vote_type' ,'up');
    }
    
    public function downvotes(){
        return $this->users()->wherePivot('vote_type' ,'down');
    }
}
