<?php

namespace App\Livewire\Frontend\Products;

use Livewire\Component;

class Index extends Component
{
    public $products, $category;

    public function mount($products, $category)
    {
        $this->products = $products;
        $this->category = $category; // Corrected variable assignment
    }

    public function render()
    {
        return view('livewire.frontend.products.index', [
            'products' => $this->products,
            'category' => $this->category,
        ]);
    }
}
