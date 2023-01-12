<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;
use App\Book;
use App\User;
use App\BorrowHistory;

class DataController extends Controller
{
    // data authors
    public function authors(){

        $authors = Author::orderBy('id','desc');
        return datatables()->of($authors)
        ->addColumn('action','admin.author.action')
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
    }

    //data Books
    public function books(){

    $books = Book::orderBy('created_at','desc')->get();
    //n + 1 yakni perulangan query for mencegah hal tersebut
    $books->load('author');

    return datatables()->of($books)
        ->addColumn('author', function(Book $model){
            return $model->author->name;
        })
        ->editColumn('cover', function(Book $model){
            return '<img src="'. $model->getCover() .'" height="150px" >';
        })
        ->addColumn('action','admin.book.action')
        ->addIndexColumn()
        ->rawColumns(['cover', 'action'])
        ->toJson();
    }

    // data pengguna
    public function pengguna(){

        $pengguna = User::orderBy('created_at','desc');
        return datatables()->of($pengguna)
        ->addColumn('action','admin.pengguna.action')
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
    }

    public function borrows(){
        $borrows = BorrowHistory::isBorrowed()->latest()->get();

        $borrows->load('user', 'book');

        return datatables()->of($borrows)
        ->addColumn('user', function(BorrowHistory $model){
            return $model->user->name;
        })
        ->addColumn('book_title', function(BorrowHistory $model){
            return $model->book->title;
        })
        ->addColumn('action','admin.borrow.action')
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
    }

}