<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password', 'role'];

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function ukms(): HasMany
    {
        return $this->hasMany(UKM::class, 'pengurus_id');
    }

    public function anggotaUKM(): HasMany
    {
        return $this->hasMany(AnggotaUKM::class);
    }

    public function pendaftaranKegiatan(): HasMany
    {
        return $this->hasMany(PendaftaranKegiatan::class);
    }
}

