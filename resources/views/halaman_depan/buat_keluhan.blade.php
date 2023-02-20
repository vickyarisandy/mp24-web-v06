@extends('layouts.hlmdpn')
@push('panggil_css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
crossorigin=""/>
<style>
    #map { height: 180px; }

</style>

<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

@endpush

@section('konten_depan')
<div class="container">
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6"></div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">

        
        <div class="col-md-12 col-sm-12">
            <label for="select">pilih kelas</label>
            <select class="form-control">
                 <option>kelas 1</option>
                 <option>Kelas 2</option>
            </select>
       </div>
      
        <div class="col-md-12 col-sm-12">
            <h4>Pilih dokter</h4>
            <div class="wow fadeInUp" data-wow-delay="0.8s" id="map" style="height: 400px; "></div>
        </div>
        <hr>
        <h4>Pilih Keluhan</h4>
        <a href="{{ url('halaman3d') }}" class="btn btn-primary" >tampil</a>

        <hr>
        <h4>Restitusi Upload PDF Kuitansi Dokter</h4>
        <form action="/file-upload"
      class="dropzone"
      id="my-awesome-dropzone" enctype="multipart/form-data" >

    </form>

    <h4>Upload PDF Copy Resep</h4>
        <form action="/file-upload"
      class="dropzone"
      id="my-awesome-dropzone" enctype="multipart/form-data" >

    </form>
    <h4>Upload PDF Kuitansi Apotik</h4>
        <form action="/file-upload"
      class="dropzone"
      id="my-awesome-dropzone" enctype="multipart/form-data" >

    </form>
    </div>
</div>
 
@endsection

@push('panggil_js')
     <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
 integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
 crossorigin=""></script>

 <script>
    $(document).ready(function(){
        var map = L.map('map').setView([-7.250445, 112.768845], 12);
 
 var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
     maxZoom: 19,
     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
 }).addTo(map);
    })
 </script>

<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<script>
    // Note that the name "myDropzone" is the camelized
    // id of the form.
    Dropzone.options.myDropzone = {
      // Configuration options go here
    };
  </script>
@endpush