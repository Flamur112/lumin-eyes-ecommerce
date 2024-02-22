<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
<<<<<<< HEAD

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
=======
=======
    ]''
>>>>>>> ac347a49731cb0e9da609a6885eba02a08e1e527
>>>>>>> 957d3f33e767cae2cc92a7d7fd7108f7d1f9c37a
}
