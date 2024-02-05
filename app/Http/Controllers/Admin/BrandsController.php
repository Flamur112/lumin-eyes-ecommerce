<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class BrandsController extends Controller
{
    public $name, $slug, $status;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'slug' => 'required|string',
            'status' => 'nullable'
        ];
    }

    public function resetInput()
    {
        $this->name= NULL;
        $this->slug= NULL;
        $this->status= NULL;
    }

    public function storeBrand()
    {
        Brand::create([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'status' => $this->status == true ? '1':'0',
        ]);
    }

    public function index()
    {
        return view('admin.brand.index');
    }
}
