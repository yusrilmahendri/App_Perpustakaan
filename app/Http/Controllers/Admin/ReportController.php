<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\User;

class ReportController extends Controller
{
    public function topBook(){

        $books = Book::withCount('borrowed')
        ->orderBy('borrowed_count', 'desc')            
        ->paginate(10);

        return view('admin.report.top-book',[
            'title' => 'Laporan Buku Terlaris',
            'books' => $books
        ]);
    }

    public function topUser(){
        $users = User::withCount('borrow')
        ->orderBy('borrow_count', 'desc')
        ->paginate(10);

        return view('admin.report.top-user',[
            'title' => 'Laporan Pengguna Populer',
            'users' => $users
        ]);
    }

}
