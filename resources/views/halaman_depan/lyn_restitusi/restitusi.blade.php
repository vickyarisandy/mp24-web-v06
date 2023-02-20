@extends('layouts.hlmdpn')

@push('panggil_css')
    <style>
      ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 20px;
}
ul.timeline > li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}
    </style>
@endpush

@section('konten_depan')
    <div class="container">
        <h4>Restitusi</h4>
        <h6>tambah </h6>
        <div class="row">
            <div class="col-md-4 p-2">
                <button class="btn btn-sm btn-primary addfiles">Upload PDF Kuitansi Dokter</button>
                <input id="fileupload" type="file" name="k_dokter" multiple style='display: none;'>
                <br>
            </div>
            <div class="col-md-4 p-2">
                <button class="btn btn-sm btn-primary addfiles">Upload PDF Copy Resep</button>
                <input id="fileupload" type="file" name="c_resep" multiple style='display: none;'>
                <br>
            </div>
            <div class="col-md-4 p-2">
                <button class="btn btn-sm btn-primary addfiles">Upload PDF Kuitansi Apotik</button>
                <input id="fileupload" type="file" name="k_apotik" multiple style='display: none;'>
                <br>
            </div>
           
           
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h4>Riwatyat Restitusi</h4>
            <ul class="timeline">
              <li>
                <a target="_blank" href="https://www.totoprayogo.com/#">New Web Design</a>
                <a href="#" class="float-right">21 March, 2014</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
              </li>
              <li>
                <a href="#">21 000 Job Seekers</a>
                <a href="#" class="float-right">4 March, 2014</a>
                <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
              </li>
              <li>
                <a href="#">Awesome Employers</a>
                <a href="#" class="float-right">1 April, 2014</a>
                <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
              </li>
            </ul>
          </div>
        </div>
    </div>
@endsection
@push('panggil_js')
<script>
$(document).ready(function(){
    $('.addfiles').on('click', function() { $('#fileupload').click();return false;});
})
</script>

@endpush