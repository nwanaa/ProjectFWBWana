<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UKM extends Model
{
    protected $table = 'ukms';
    protected $fillable = ['nama_ukm', 'deskripsi', 'pengurus_id'];

    public function pengurus(): BelongsTo
    {
        return $this->belongsTo(User::class, 'pengurus_id');
    }

    public function anggota(): HasMany
    {
        return $this->hasMany(AnggotaUKM::class);
    }

    public function kegiatans(): HasMany
    {
        return $this->hasMany(Kegiatan::class);
    }
}

