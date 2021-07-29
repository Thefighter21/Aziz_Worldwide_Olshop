<div class="container mt-2">
    <div class="container">
        <div class="row mt-4 mb-2">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route('home') }}" class="text-dark">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">History</li>
                    </ol>
                  </nav>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
            </div>
        </div>
        
    <div class="row mt-4">
       <div class="col">
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Tanggal Pesan</td>
                        <td>Nama</td>
                        <td>Alamat</td>
                        <td>No Hp</td>
                        <td>Kode Pemesanan</td>
                        <td>Pesanan</td>
                        <td>Status</td>
                        <td><strong>Total Harga</strong></td>
                        <td>Konfirmasi Pembayaran</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                   @forelse ($pesanans as $pesanan)
                   <tr>
                     <td>{{ $no++ }}</td>
                     <td>{{ $pesanan->created_at }}</td>
                     <td>{{ $pesanan->nama }}</td>
                     <td>{{ $pesanan->alamat }}</td>
                     <td>{{ $pesanan->nohp }}</td>
                     <td>{{ $pesanan->kode_pemesanan }}</td>

                     <td>
                         <?php $pesanan_details = \App\Models\PesananDetail::where('pesanan_id', $pesanan->id)->get(); ?> 
                         @foreach ($pesanan_details as $pesanan_detail)
                         {{ $pesanan_detail->product->nama }}
                         <br>
                         @endforeach
                     </td>
                     <td>
                         @if($pesanan->status == 1)
                         Belum Lunas
                         @else
                         lunas
                         @endif
                     </td>
                     <td><strong>Rp. {{number_format($pesanan->total_harga) }}</strong></td>
                    <td>{{ QrCode::generate('Silahkan Konfirmasi Pembayaran dengan mengirimkan foto transfer https://wa.me/6281234567890 dan mengirim Kode Pesananya') }}</td>
                   </tr>
                   @empty
                       <tr>
                           <td colspan="10">Data Kosong</td>
                       </tr>
                   @endforelse 
                   
                </tbody>
            </table>
        </div>
       </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <p>Untuk Pembayaran Silahkan dapat Transfer di Rekening dibawah ini : </p> 
                <div class="media">
                    <img class="mr-3" src="{{url('assets/bri.png')}}" alt="Bank BRI" width="60">
                <div class="media-body">
                      <h5 class="mt-0">BANK BRI</h5>
                    No. Rekening 024343-453-432 Atas Nama <strong>M. Rafi Habibi</strong>
                    </div>
                </div>
              </div>  
            </div>
        </div>
    </div>
</div>


