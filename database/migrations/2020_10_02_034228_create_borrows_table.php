<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

class CreateBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->date('date_peminjaman');
            $table->date('date_batas_akhir_peminjaman');
            $table->date('date_pengembalian')->nullable();
            $table->unsignedBigInteger('mhs_peminjam_id');
            $table->unsignedBigInteger('book_id');
            $table->boolean('status_ontime')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrows');
    }
}
