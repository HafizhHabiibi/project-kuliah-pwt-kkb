<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Produk - Bharata')]
class ProductsPage extends Component
{
    use WithPagination;

    #[Url]
    public $pilih_kategori = [];

    #[Url]
    public $populer;

    #[Url]
    public $penawaran_khusus;

    #[Url]
    public $rentang_harga = 25000;

    #[Url]
    public $sort = 'latest';

    // tambah produk ke cart
    public function addToCart($product_id) {
        $total_count = CartManagement::addItemToCart($product_id);

        $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);
    }

    public function render()
    {
        $productQuery = Product::query()->where('is_active', 1);

        if (!empty($this->pilih_kategori)) {
            $productQuery->whereIn('category_id', $this->pilih_kategori);
        }

        if ($this->populer) {
            $productQuery->where('is_featured', 1);
        }

        if ($this->penawaran_khusus) {
            $productQuery->where('on_sale', 1);
        }

        if  ($this->rentang_harga) {
            $productQuery->whereBetween('price', [0, $this->rentang_harga]);
        }

        if ($this->sort == 'latest') {
            $productQuery->latest();
        }

        if ($this->sort == 'price') {
            $productQuery->orderBy('price');
        }

        return view('livewire.products-page', [
            'products' => $productQuery->paginate(6),
            'categories' => Category::where('is_active', 1)->get(['id', 'name', 'slug']),
        ]);
    }
}
