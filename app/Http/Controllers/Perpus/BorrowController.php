<?php

namespace App\Http\Controllers\Perpus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perpus\Book;
use App\Models\User;
use Carbon\Carbon;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mhs_peminjam_id' => ['required'],
            'book_id' => ['required'],
        ]);

        if(
            User::get()->contains('id', request('mhs_peminjam_id')) &&
            Book::get()->contains('id', request('book_id'))
        ) {
            $borrow = auth()->user()->borrows()->create([
                'date_peminjaman' => request('date_peminjaman') ?? Carbon::now()->toDateString(),
                'date_batas_akhir_peminjaman' => request('date_batas_akhir_peminjaman') ?? Carbon::now()->addWeek(1)->toDateString(),
                'date_pengembalian' => request('date_pengembalian'),
                'mhs_peminjam_id' => request('mhs_peminjam_id'),
                'book_id' => request('book_id'),
                'status_ontime' => request('status_ontime') ?? 1,
            ]);
            
            return $borrow;
        }

        $fail = [
            'status' => 'failed, book or peminjam not found'
        ];

        return $fail;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
