<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendaftaranUKM extends Model
{
    protected $table = 'pendaftaran_ukm';
    protected $fillable = ['user_id', 'ukm_id', 'status'];
}
