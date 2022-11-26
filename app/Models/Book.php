<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';

    public function publishers(){
        return $this->belongsTo(Publisher::class);
    }

    public function categories(){
        return $this->belongsTo(Categories::class);
    }
}
