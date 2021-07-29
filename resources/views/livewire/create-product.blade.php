<div class="container">
    <div class="container">
        <div class="row mt-4 mb-2">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route('admin') }}" class="text-dark">Admin</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Create Product</li>
                    </ol>
                  </nav>
            </div>
        </div>

    <p class="text-3xl mt-4 font-bold"><strong>Buat Produk</strong></p>
    <div class="flex justify-center my-6">
        <div class="col">
            <form wire:submit.prevent="create">
            <div class="mt-1">
                <label class="block text-sm text-gray-00" for="cus_name">Nama Produk</label>
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" wire:model="nama" value="{{ old('nama') }}" required autocomplete="name" autofocus>
            </div>
            <div class="mt-1">
                <label class="block text-sm text-gray-00" for="cus_name">Deskripsi Produk</label>
                <input id="deskripsi_produk" type="text" class="form-control @error('deskripsi_produk') is-invalid @enderror" wire:model="deskripsi_produk" value="{{ old('deskripsi_produk') }}" required autocomplete="name" autofocus>
            </div>
            <div class="mt-3">
                <label class="block text-sm text-gray-00" for="cus_name">Harga Produk</label>
                <input id="harga" type="number" class="form-control @error('harga') is-invalid @enderror" wire:model="harga" value="{{ old('harga') }}" required autocomplete="name" autofocus>
            </div>
            <div class="mt-3">
                <label class="block text-sm text-gray-00" for="cus_name">Kategori</label>
                <div class="flex items-center mt-2">
                    <div class="relative">
                    <select wire:model="kategori" class="rounded appearance-none border-2 py-2 focus:outline-none focus:border-black text-base pl-3 pr-10">
                                <option value="1">Topi</option>
                                <option value="2">T-shirt</option>
                                <option value="3">Hoddie</option>
                                <option value="4">Crewneck</option>
                            </select>
                        </div>
                    </div>
            </div>
            
            <div class="mt-3">
                <label class="block text-sm text-gray-00" for="cus_name">Stok Produk</label>
                <div class="flex items-center mt-2">
                    <div class="relative">
                    <select wire:model="is_ready" class="rounded appearance-none border-2 py-2 focus:outline-none focus:border-black text-base pl-3 pr-10">
                                <option value="1">Ready Stock</option>
                                <option value="0">Stock Kosong</option>
                            </select>
            </div>
            <div class="mt-3 mb-3">
                <label class="block text-sm text-gray-00" for="cus_name">Gambar Produk</label>
                <input wire:model="gambar" type="file" class="w-full mt-3 text-gray-700 px-3 py-2 border-2 rounded">
            </div>
            <hr>
            <div class="text-right mt-3">
                <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i>&nbspBuat Produk</button>
            </div>
            </form>
        </div>
    </div>

</div>
