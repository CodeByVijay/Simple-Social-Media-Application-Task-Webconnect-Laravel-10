<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Follower extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    // public function following(): BelongsTo
    // {
    //     return $this->belongsTo(User::class, 'user_id', 'uuid');
    // }

    // public function follower(): BelongsTo
    // {
    //     return $this->belongsTo(User::class, 'follower_id', 'uuid');
    // }
}
