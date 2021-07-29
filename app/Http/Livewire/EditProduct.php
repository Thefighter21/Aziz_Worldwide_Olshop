<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;



class EditProduct extends Component
{
    public $product, $idProduct;
    public $is_ready;
    public $deskripsi_produk;
    public $berat;
    public $harga;




    public function mount($id) {
        $productDetail = Product::find($id);

        if ($productDetail) {
            $this->product = $productDetail;
            $this->idProduct = $productDetail->id;
            $this->is_ready = $productDetail->is_ready;
            $this->deskripsi_produk = $productDetail->deskripsi_produk;
            $this->berat = $productDetail->berat;
            $this->harga = $productDetail->harga;

        }
    }

    public function editStock() {
        $productDetail = Product::find($this->idProduct);

        if ($productDetail) {
            $productDetail->update([
                'is_ready' => $this->is_ready,
                'deskripsi_produk' => $this->deskripsi_produk,
                'berat' => $this->berat,
                'harga' => $this->harga,
            ]);

            return redirect()->route('admin');
        }
    }

    public function render()
    {
        if(Auth::user()->is_admin == 1) {
            return view('livewire.edit-product');
        } else {
            abort(404);
        }
    }
}
