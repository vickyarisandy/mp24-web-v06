@extends('layouts.hlmdpn')
@section('konten_depan')
    
<section id="news" data-stellar-background-ratio="2.5" style="background-position: 0px 666px;">
    
    <div class="card">
     <div class="card-header">
       <h2 >Obat</h2>
     </div>

       <div class="card-body">
         @livewire('search-pagination')
       </div>
   </div>  
  
    </section>
    @livewireScripts
@endsection

@push('panggil_js')
    
@endpush