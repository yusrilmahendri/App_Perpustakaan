<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;

class Book extends Model
{    
    protected $guarded = [];

    public function author(){
        return  $this->belongsTo(Author::class);
    }

    //cek cover buku 
    public function getCover(){
        if(substr($this->cover,0,5) == "https") {
            return $this->cover;
        }
        if($this->cover){
           return asset($this->cover);
        }

        return 'https://via.placeholder.com/150x200.png?text=No+Cover';

    }

}
