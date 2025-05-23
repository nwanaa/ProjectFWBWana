<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    protected $fillable = ['user_id', 'nim', 'jurusan', 'alamat'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

