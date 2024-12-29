<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Checkout-Bharata')]
class CheckoutPage extends Component
{

    public $first_name;
    public $last_name;
    public $phone;
    public $alamat;
    public $kabkota;
    public $provinsi;
    public $kode_pos;
    public $payment_method;

    public function placeorder() {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
            'kabkota' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'payment_method' => 'required',
        ]);
    }



    public function render()
    {
        $cart_items = CartManagement::getCartItemsFromCookie();
        $grand_total = CartManagement::calculateGrandTotal($cart_items);
        return view('livewire.checkout-page', [
            'cart_items' => $cart_items,
            'grand_total' => $grand_total,
        ]);
    }
}
