<div>
    <section class="container admin-order my-5">
        <div class="container">
            <div class="row mt-4 mb-2">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('admin') }}" class="text-dark">Admin</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Pesanan Masuk</li>
                        </ol>
                      </nav>
                </div>
            </div>

        <div class="flex justify-center mt-2">
                <div class="p-0 bg-gray-10 rounded-full">
                    <h3 class=""><strong>Daftar Transaksi</strong> </h3>
                </div>

                <div class="flex mt-3">
                    <input wire:model="search" type="text" class="border-2 form-input mt-4 w-72"placeholder="Search Transaksi">
                    <i class="fas fa-search"></i>

                </div>

    <div class="row mt-4">
       <div class="col">
        <div class="table-responsive">
            <table class="table text-center">
                <tr>
                    <td>No.</td>
                    <td>Tanggal Pesan</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>No Hp</td>
                    <td>Kode Pemesanan</td>
                    <td>Pesanan</td>
                    <td><strong>Total Harga</strong></td>
                    <td>Status</td>
                    <td>aksi</td>
                    <td></td>
                </tr>
            </thead>
                <tbody>
                    @forelse($pesanans as $index => $pesanan)
                        <tr>
                            <td class="py-4 px-6 border-t border-grey-light">{{ $index + 1 }}</td>
                            <td class="py-4 px-6 border-t border-grey-light">{{ $pesanan->created_at }}</td>
                            <td class="py-4 px-6 border-t border-grey-light">{{ $pesanan->nama }}</td>
                            <td class="py-4 px-6 border-t border-grey-light">{{ $pesanan->alamat }}</td>
                            <td class="py-4 px-6 border-t border-grey-light">{{ $pesanan->nohp }}</td>
                            <td class="py-4 px-6 border-t border-grey-light">{{ $pesanan->kode_pemesanan }}</td>
                            <td <?php $pesanan_details = \App\Models\PesananDetail::where('pesanan_id', $pesanan->id)->get(); ?> 
                                @foreach ($pesanan_details as $pesanan_detail)
                                <img src="" class="img-fluid" width="50"> 
                                {{ $pesanan_detail->product->nama }}
                                <br>
                                @endforeach
                            </td>
                            <td class="py-4 px-6 border-t border-grey-light">{{ $pesanan->total_harga }}</td>
                            <td class="py-4 px-6 border-t border-grey-light">
                                @if ($pesanan->status == 1)
                                    <span class="text-red-600 font-bold">Belum Lunas</span>
                                @elseif($pesanan->status == 2)
                                    <span class="text-green-400 font-bold">Sudah Lunas</span>
                                @endif
                            </td>
                            <td class="py-4 px-6 border-t border-grey-light">
                                <a href="{{ route('edit-transaction', $pesanan->id) }}"
                                    class="text-grey-lighter font-bold py-1 px-3 rounded text-xl bg-green hover:bg-green-dark"><i
                                        class="fas fa-edit"></i></a>
                               
                            </td>
                        @empty
                        <tr>
                            <td colspan="6" align="center">Data Kosong</td>
                        </tr>
                    @endforelse
            </table>
        </div>
       </div>
    </div>
                <div class="mt-5">
                    {{ $pesanans->links() }}
                </div>
            </div>
        </div>
    </section>
</div>
