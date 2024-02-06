<?php

namespace App\Http\Livewire\Admin\Brand;

use Illuminate\Support\Facades\Log;
use App\Models\Brand;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name, $slug, $status;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'slug' => 'required|string',
            'status' => 'nullable|boolean',
        ];
    }

    public function storeBrand()
    {

    $this->validate();
    dd('reached');
    Brand::create([
        'name' => $this->name,
        'slug' => Str::slug($this->slug),
        'status' => $this->status ? 1 : 0,
    ]);
    session()->flash('message', 'Brand Added Successfully');
    $this->resetInput();

    $this->emit('closeModal');
    }


    public function resetInput()
    {
        $this->name = null;
        $this->slug = null;
        $this->status = null;
    }

    public function render()
    {
        $brands = Brand::orderBy('id','DESC')->paginate(100);
        return view('livewire.admin.brand.index', ['brands' => $brands]);
    }
}

