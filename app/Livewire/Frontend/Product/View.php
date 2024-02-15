<?php

namespace App\Livewire\Frontend\Product;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlist;

use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\warning;

class View extends Component
{

        public $category, $product, $quantityCount = 1;

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

        public function incrementQuantity()
        {
            if($this->quantityCount < 10)
            {

            $this->quantityCount++;
            }
        }


        public function decrementQuantity()
        {
            if ($this->quantityCount > 1)
            $this->quantityCount--;
        }


        public function addToCart(int $productId)
{
    if (Auth::check()) {
        if ($this->product->where('id', $productId)->where('status', '0')->exists()) {

            if(Cart::where('user_id',auth()->user()->id)->where('product_id', $productId)->exists())
            {
                session()->flash('message', 'Product Already Added');
                session()->flash('type', 'warning');
                session()->flash('status', 200);
            }
            else
            {
                if ($this->product->quantity > 0) // Check if quantity is greater than 0
                {
                    if ($this->product->quantity > $this->quantityCount) {
                        // Insert product to Cart
                        Cart::create([
                            'user_id' => auth()->user()->id,
                            'product_id' => $productId,
                            'quantity' => $this->quantityCount
                        ]);

                        $this->dispatch('CartAddedUpdated');
                        session()->flash('message', 'Added to Cart');
                        session()->flash('type', 'success');
                        session()->flash('status', 200);
                    } else {
                        session()->flash('message', 'Only ' . $this->product->quantity . ' Quantity Available');
                        session()->flash('type', 'warning');
                        session()->flash('status', 404);
                    }
                }
                else
                {
                    session()->flash('message', 'Out of Stock');
                    session()->flash('type', 'warning');
                    session()->flash('status', 404);
                }
            }
        }
        else
        {
            session()->flash('message', 'The Product Does not exist');
            session()->flash('type', 'warning');
            session()->flash('status', 404);
        }
    } else {
        session()->flash('message', 'Please login to add to cart');
        session()->flash('type', 'info');
        session()->flash('status', 401);
    }
}



    public function mount($category, $product)
    {
        $this->category = $category;
        $this->product = $product;
    }

}
