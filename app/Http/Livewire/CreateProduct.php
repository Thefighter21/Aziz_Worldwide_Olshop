<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Http\Livewire\CreateProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CreateProduct extends Component
{
    use WithFileUploads;

    public $nama, $harga, $gambar, $deskripsi_produk, $berat;
    public $kategori = "1"; 
    public $is_ready = "1";

    public function create() {
        $this->validate([
            'nama' => 'required',
            'harga' => 'required',
            'gambar' => 'image|max:2048|required',
            'kategori' => 'required',
            'deskripsi_produk' => 'required',
            'is_ready' => 'required',
        ]);

        $imageName = md5($this->gambar.microtime().'.'.$this->gambar->extension());

        Storage::putFileAs(
            'public/assets',
            $this->gambar,
            $imageName
        );

        Product::create([
            'nama' => $this->nama,
            'harga' => $this->harga,
            'is_ready' => $this->is_ready,
            'kategori_id' => $this->kategori,
            'deskripsi_produk' => $this->deskripsi_produk,
            'gambar' => $imageName,
        ]);


        $this->nama = '';
        $this->harga = '';
        $this->is_ready = '';
        $this->kategori = '';
        $this->gambar = '';
        $this->deskripsi_produk = '';
        return redirect()->route('admin');
    }

    public function render()
    {
        if(Auth::user()->is_admin == 1) {
            return view('livewire.create-product');
        } else {
            abort(404);
        }
    }
}
