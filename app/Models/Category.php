<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
       'name',
       'slug',
       'description',
       'image',
       'meta_title',
       'meta_keyword',
       'meta_description',
       'status',
<<<<<<< HEAD
    ];
=======
    ]''
>>>>>>> ac347a49731cb0e9da609a6885eba02a08e1e527
}
