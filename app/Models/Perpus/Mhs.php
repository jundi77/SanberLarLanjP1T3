<?php

namespace App\Models\Perpus;

use Illuminate\Database\Eloquent\Model;

class Mhs extends Model
{
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
