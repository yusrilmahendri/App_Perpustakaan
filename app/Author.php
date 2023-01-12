<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Author extends Model
{
    public $timestamps = false;
    public $guarded = [];
    
    public function books(){
          return $this->hasMany(Book::class);
    }

}
