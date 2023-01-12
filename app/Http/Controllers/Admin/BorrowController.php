<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\BorrowHistory;

class BorrowController extends Controller
{
    public function index(){
         return view('admin.borrow.index');
    }

    public function returnBook(Request $request, BorrowHistory $borrowHistory){
         $borrowHistory->update([
             'returned_at' => Carbon::now(),
             'admin_id' => auth()->id(),
         ]);

         //update buku ketika sduah dikembalikan
         $borrowHistory->book()->increment('qty');
         
         return redirect()->back()->withSuccess('Buku dikembalikan');
    }
    
}