<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Slider; // Tambahkan import model Slider
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home Page - Bharata')]
class HomePage extends Component
{
    public function render()
    {
        $categories = Category::where('is_active', 1)->get();
        $sliders = Slider::all(); // Ambil data slider yang aktif

        return view('livewire.home-page', [
            'categories' => $categories,
            'sliders' => $sliders, // Kirim data slider ke view
        ]);
    }
}
