<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Livewire\Component;

class Admin extends Component
{
    use WithPagination;

    public $search;

    public function delete($idProduct) {
        $product = Product::find($idProduct);
        $product->delete();
    }

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render()
    {
        if(Auth::user()->is_admin == 1) {
            return view('livewire.admin', [
                'products' => Product::where('nama','like','%'.$this->search.'%')->paginate(20),
            ]);
        } else {
            abort(404);
        }
    }
}