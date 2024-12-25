<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;

#[Title('Detail Produk - Bharata')]

class ProductDetailPage extends Component
{

    public $slug;
    public $quantity = 1;

    public function mount($slug) {
        $this->slug = $slug;
    }

    public function increaseQTY() {
        $this->quantity++;
    }

    public function decreaseQTY() {
        if($this->quantity > 1) {
            $this->quantity--;
        }
    }

    // tambah produk ke cart
    public function addToCart($product_id) {
        $total_count = CartManagement::addItemToCartWithQty($product_id, $this->quantity);

        $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);
    }

    public function render()
    {
        return view('livewire.product-detail-page', [
            'product' => Product::where('slug', $this->slug)->firstOrFail(),
        ]);
    }
}
