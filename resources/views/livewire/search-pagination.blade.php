
<div class="container">
    <div class="row">
         <div class="col-md-12 col-sm-12">
            <input type="text"  class="form-control" placeholder="Cari Obat atau Vitamin" wire:model="searchTerm" />
         </div>
    </div>
    <hr>
   <div class="shop-content">
      @foreach ($obats as $obat)
      <div class="product-box">
          <img src="{{ asset('depan/images/paracetamol.jpg')}}" alt="" class="">
          <h4 class="">{{ $obat->nama_obat }}</h4>
          <span class="price">Rp {{ number_format(rand(10000,100000)) }}</span>
      </div>
      @endforeach  
   </div>
   {{ $obats->links() }}
</div>

