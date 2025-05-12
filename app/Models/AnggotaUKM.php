<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnggotaUKM extends Model
{
    protected $table = 'anggota_ukm';
    protected $fillable = ['user_id', 'ukm_id', 'status'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function ukm(): BelongsTo
    {
        return $this->belongsTo(UKM::class);
    }
}

