<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title(('Home Page - Bharata'))]
class HomePage extends Component
{
    public function render()
    {
        $categories = Category::where('is_active', 1)->get();

        return view('livewire.home-page', [
            'categories' => $categories
        ]);
    }
}
