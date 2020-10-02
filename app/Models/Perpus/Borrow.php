<?php

namespace App\Models\Perpus;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $fillable = [
        'date_peminjaman', 'date_batas_akhir_peminjaman',
        'date_pengembalian', 'mhs_peminjam_id', 'status_ontime',
        'book_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\Perpus\User', 'mhs_peminjam_id', 'id');
    }

    public function book()
    {
        return $this->belongsTo('App\Models\Perpus\Book');
    }
}
