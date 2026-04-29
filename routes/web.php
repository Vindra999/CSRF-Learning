<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Route index halaman utama
Route::get('/', fn() => redirect()->route('books.index'));

// Resource route — menghasilkan 7 routes sekaligus
Route::resource('books', BookController::class);

/*
 * Route yang dihasilkan:
 * GET    /books          → index()   — daftar buku
 * GET    /books/create   → create()  — form tambah
 * POST   /books          → store()   — simpan baru
 * GET    /books/{book}   → show()    — detail buku
 * GET    /books/{book}/edit → edit() — form edit
 * PUT    /books/{book}   → update()  — simpan edit
 * DELETE /books/{book}   → destroy() — hapus
 */