<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'caption', 'media', 'media_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id')->latest();
    }

    public function likes()
{
    return $this->hasMany(Like::class);
}


}
