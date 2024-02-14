<?php

namespace App\Livewire\Frontend\Product;

use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class View extends Component
{

    public $category, $product;

    public function addToWishList($productId)
    {
        if(Auth::check())
        {
            if(Wishlist::where('user_id',auth()->user()->id)->where('product_id', $productId)->exists())
            {
                session()->flash('message','This item is already in your wishlist.');
                return false;
            }
            else
            {
                Wishlist::create([
                    'user_id' => auth()->user()->id,
                    'productId' => $productId,
                ]);
                session()->flash('message','This item has been added to your wishlist.');

             }
        }
        else
        {
            session()->flash('message','Please log in to add it to your wishlist.');
            return false;
        }
    }

    public function addToCart(int $productId)
    {
        if(Auth::check())
        {

        }
        else
        {
            $this->dispatch('message', [
                'text' => 'Please Login to add to cart',
                'type' => 'info',
                'status' => 401
            ]);
        }
    }

    public function mount($category, $product)
    {
        $this->category = $category;
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.frontend.product.view', [
            'category' => $this->category,
            'product' => $this->product
        ]);
    }
}
