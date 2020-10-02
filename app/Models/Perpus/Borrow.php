<?php

namespace App\Models\Perpus;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $fillable = [
        'date_peminjaman', 'date_batas_akhir_peminjaman',
        'date_pengembalian', 'mhs_peminjam', 'status_ontime'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
