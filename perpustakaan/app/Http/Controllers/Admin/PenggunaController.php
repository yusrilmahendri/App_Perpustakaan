<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class PenggunaController extends Controller
{
    public function index(){
        return view('admin.pengguna.index');
    }

    public function edit(User $pengguna){
       return view('admin.pengguna.edit', [
           'title' => 'Edit Data Pengguna',
           'pengguna' => $pengguna,
       ]);
    }

    public function update(Request $request,User $pengguna)
    {
        $this->validate($request, [
        'password' => 'required|min:3|',
       ]);

        $pengguna->update([
            'password' => bcrypt($request->password),
       ]);

        return redirect()->route('admin.author.index')
        ->with('info','Data Penulis Berhasil Diupdate');
    }
  
    

}
