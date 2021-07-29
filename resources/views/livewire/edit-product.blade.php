<div>
    <section class="edit-product my-5">
        <div class="container">
            <div class="row mb-2">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('admin') }}" class="text-dark">Admin</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                      </nav>
                </div>
            </div>
        </div>
        <h3><strong>Edit Stok</strong>
            <div class="flex justify-center my-6">
                <p class=" p-2 font-bold">{{ $product->nama }}</p>
                <form wire:submit.prevent="editStock">
                    <div class="">
                        <div class="card-body">
                            <img src="{{ asset('storage/assets/') }}/{{ $product->gambar }}" class="img-fluid" width="400">
                        </div>
                    </div>
                    <div class="col">
                        <label class="block text-sm text-gray-00" for="cus_name">Deskripsi Produk</label>
                        <input id="deskripsi_produk" type="text" class="form-control @error('deskripsi_produk') is-invalid @enderror" wire:model="deskripsi_produk" value="{{ old('deskripsi_produk') }}" required autocomplete="name" autofocus>
                    </div>
                    <div class="col">
                        <label class=" text-sm text-gray-00" for="cus_name">harga</label>
                        <input id="harga" type="number" class="form-control @error('harga') is-invalid @enderror" wire:model="harga" value="{{ old('harga') }}" required autocomplete="name" autofocus>
                    </div>                              
                            <div class="flex items-center">
                                <span class="mt-1">Stock</span>
                                <div class="relative">
                                <select wire:model="is_ready" class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-black text-base pl-3 pr-10">
                                    <option value="1">Ready Stock</option>
                                    <option value="0">Stock Kosong</option>
                                </select>
                                    
                                </div>
                            </div>
                        </div>
                            <div class="text-right mt-2">
                                <a href="{{ route('admin') }}" class=""> <i class="fas fa-arrow-left"></i>&nbspBack</a>
                                <button type="submit" class="btn btn-success center"> <i class="fas fa-save"></i>&nbspUbah Produk</button>
                            </div>
                </form>
            </div>
        </div>
    </section>
</div>
