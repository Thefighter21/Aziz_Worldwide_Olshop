<div>
    <section class="container admin my-5">
        <div class="row mb-2">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route('home') }}" class="text-dark">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Admin</li>
                      <li class="breadcrumb-item"><a href="{{route('admin-order-dashboard') }}" class="text-dark">Pesanan Masuk</a></li>

                    </ol>
                  </nav>
            </div>
        </div>

    <div class="flex justify-center my-6">
        <div class="">
            <div class="">
                <h3><strong>List Produk</strong></h3>
            </div>
             <div class="col">
                <input wire:model="search" type="text" class="border-2 form-input mt-4 w-72" placeholder="Search Product">
                 </div>
            </div>

            <div class="text-right">
                <a class="btn btn-success rounded"href="{{route('create-product')}}">&nbsp;Create Product </a>
            </div>

            <div class="row mt-4">
                <div class="col">
                 <div class="table-responsive">
                     <table class="table text-center">
                         <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Produk</td>
                    <td>Gambar</td>
                    <td>Berat</td>
                    <td>Harga</td>
                    <td>Stok</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $index => $product)
                <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $product->nama }}</td>
                <td>
                    <img src="{{asset('storage/assets/'.$product->gambar)}}" class="img-fluid" width="50"> 
                </td>
                <td>{{ $product->berat }}</td>
                <td>Rp{{ number_format($product->harga) }}</td>
                <td>
                    @if($product->is_ready == 1)
                        Ready Stock
                    @else
                        Stok Kosong
                    @endif
                </td>
                <td class="py-4 px-6 border-t border-grey-light">
                    <a href="{{ route('products.detail', $product->id ) }}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xl bg-green hover:bg-green-dark"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('edit-product', $product->id) }}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xl bg-blue hover:bg-blue-dark"><i class="fas fa-edit"></i></a>
                    <button type="button" onclick="return confirm('Apakah yakin ingin menghapus produk ini?') || event.stopImmediatePropagation()" wire:click="delete({{ $product->id }})" class="text-grey-lighter font-bold py-1 px-3 rounded text-xl bg-blue hover:bg-blue-dark"><i class="text-red-500 fas fa-trash"></i></a>
                </td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
    </section>
</div>
