<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kegiatan extends Model
{
    protected $table = 'kegiatans';
    protected $fillable = ['ukm_id', 'nama_kegiatan', 'deskripsi', 'tanggal', 'lokasi'];

    public function ukm(): BelongsTo
    {
        return $this->belongsTo(UKM::class);
    }

    public function pendaftar(): HasMany
    {
        return $this->hasMany(PendaftaranKegiatan::class);
    }
}

