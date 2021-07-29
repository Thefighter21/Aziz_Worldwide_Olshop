<div class="container">
   
    {{--BANNER--}}
    <div class="banner">
        <img src="{{ url('assets/slider/banner.png') }}" alt="">
    </div> 
    
    {{--KATEGORI--}}
    <section class="pilih-kategori mt-4">
        <h3><strong>Pilih Kategori</strong></h3>
        <div class="row mt-4">
            @foreach ($kategoris as $kategori)
            <div class="col-md-3">
                <a href="{{ route('products.kategori', $kategori->id) }}">
                    <div class="card shadow">
                        <div class="card-body text-center">
                          <img src="{{ url('assets/kategori') }}/{{ $kategori->gambar }}" class="img-fluid">
                        </div>
                </a>
                  </div>
            </div>
            @endforeach
        </div>
    </section>
        
    {{--BEST PRODUCT--}}
    <section class="products mt-5 mb-5">
        <h3><strong>List All Product</strong>
            <a href="{{ route('products') }}" class="btn btn-dark float-right"><i class="fas fa-eye"> Lihat Semua </i></a>
        </h3>
        <div class="row mt-4">
            @foreach ($products as $product)
            <div class="col">
                <div class="card ">
                    <div class="card-body text-center">
                      <img src="{{asset('storage/assets/'.$product->gambar)}}" class="img-fluid">
                      <div class="row mt-2">
                          <div class="col-md-12">
                              <h5><strong>{{ $product->nama }}</strong></h5>
                              <h5>Rp. {{ number_format ($product->harga) }}</h5>
                          </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-12">
                            <a href="{{ route('products.detail', $product->id) }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i>Detail</a>
                        </div>
                    </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
