<div>
    <section class="container admin-order my-5">
        <div class="container">
            <div class="row mt-4 mb-2">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('admin-order-dashboard') }}" class="text-dark">Admin</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Edit Transaksi</li>
                        </ol>
                      </nav>
                </div>
            </div
        <div class="flex justify-center my-6">
            <div>
                <p class="text-xl mt-1 p-1 font-bold">Nama: {{ $pesanan->nama }}</p>
                <p class="text-xl mt-1 p-1 font-bold">Alamat: {{ $pesanan->alamat }}</p>
                <p class="text-xl mt-1 p-1 font-bold">No Hp: {{ $pesanan->nohp }}</p>
                <p class="text-xl mt-1 p-1 font-bold">Kode Pesananan: {{ $pesanan->kode_pemesanan }}</p>
                <form wire:submit.prevent="editTransaksi">
                <div class="flex mt-2 p-4 items-center pb-5 border-gray-200 mb-5">
                            
                            <div class="flex items-center">
                                <span class="mr-3">Status Transaksi</span>
                                <div class="relative">
                                <select wire:model="status" class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-black text-base pl-3 pr-10">
                                    <option value="1">Belum Lunas</option>
                                    <option value="2">Sudah Lunas</option>
                                </select>
                            <div class="text-right mt-3">
                                <a href="{{ route('admin-order-dashboard') }}" class="mx-2 inline-flex justify-center px-10 py-2 w-56 text-white font-semibold bg-red-900 hover:bg-red-800 rounded-md shadow-sm"> <i class="fas fa-arrow-left"></i>&nbspBack</a>
                                <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i>&nbspUbah Status</button>
                            </div>
                </form>
            </div>
        </div>
        </section>
</div>
