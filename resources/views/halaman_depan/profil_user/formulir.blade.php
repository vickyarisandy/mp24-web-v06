@extends('layouts.hlmdpn')
@push('panggil_css')
    
@endpush
@section('konten_depan')
 <!-- MAKE AN APPOINTMENT -->
 <section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
         <div class="row">

                   <!-- CONTACT FORM HERE -->
                    @if ($datas['DataUser']->nokartu == null)
                       <form id="appointment-form" action="{{ route('person.update', $datas['DataUser']->id) }}" method="post" >
                    @else
                    <form action="" method="post"></form>
                    @endif

                    @csrf
                    @method('PUT')

                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                             <h2>Update Profil</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                             <div class="col-md-6 col-sm-6">
                                  <label for="name">Nomer Kartu</label>
                                  <input type="text" class="form-control" id="nokartu" name="nokartu" placeholder="Nomer kartu" value="{{ $datas['DataUser']->nokartu }}" >
                             </div>

                             <div class="col-md-6 col-sm-6">
                                  <label for="name">Nomer Peserta</label>
                                  <input type="text" class="form-control" id="nopeserta" name="nopeserta" placeholder="Nomer kartu" value="{{ $datas['DataUser']->nopeserta; }}" >
                             </div>

                             <div class="col-md-6 col-sm-6">
                                  <label for="name">Nama Lengkap</label>
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="{{ $datas['DataUser']->nama }}" >
                             </div>

                             <div class="col-md-6 col-sm-6">
                                  <label for="email">Email</label>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" value="{{ $datas['DataUser']->email; }}">
                             </div>

                             <div class="col-md-6 col-sm-6">
                                  <label for="date">Select Date</label>
                                  <input type="date" name="tanggallahir" id="tanggallahir" value="{{ $datas['DataUser']->tanggallahir; }}" class="form-control">
                             </div>

                             <div class="col-md-6 col-sm-6">
                                  <label for="select">Pilih Jenis Kelamin</label>
                                  <select class="form-control">
                                       <option>Laki - Laki</option>
                                       <option>Perempuan</option>
                                  </select>
                             </div>
                             
                             <div class="col-md-12 col-sm-12">
                                  <label for="telephone">Phone Number</label>
                                   <input id="nohp" name="nohp" type="text" class="form-control nomer" value="{{ $datas['DataUser']->nohp; }}">
                                  
                                  <button type="submit" class="form-control" id="cf-submit" name="submit">PERBARUI</button>
                             </div>
                        </div>
                  </form>
              </div>

         </div>
    </div>
</section>
@endsection
@push('panggil_js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8-beta.17/jquery.inputmask.min.js" integrity="sha512-zdfH1XdRONkxXKLQxCI2Ak3c9wNymTiPh5cU4OsUavFDATDbUzLR+SYWWz0RkhDmBDT0gNSUe4xrQXx8D89JIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
$(document).ready(function(){
     Swal.fire(
     'Selamat datang',
     'Lengkapi Data Anda',
     'success'
     )
  $('.nomer').inputmask("99-9999-9999-999");  //static mask

});
</script>
@endpush