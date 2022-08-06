<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {

        return view('livewire.product.index', [
            'products' => Product::latest()->paginate(10)
        ]);
    }
}
