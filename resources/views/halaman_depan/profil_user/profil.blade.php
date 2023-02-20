@extends('layouts.hlmdpn')
@section('konten_depan')
     <!-- NEWS -->
     <section id="appointment" data-stellar-background-ratio="3">
        <div class="container">
             <div class="row">

                  <div class="col-md-12 col-sm-12">
                      
                       <!-- PAYMENT -->
                       <div class="section-title wow fadeInUp" data-wow-delay="0.4s">

                            <CENTER><h1>Profil </h1></CENTER>

                            <div class="col-md-6 col-sm-6">
                                <!-- NEWS THUMB -->
                              <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                                   <a href="news-detail.html">
                                        <img src="{{asset('depan/images/doktericon.jpg')}}" class="img-responsive" alt="">
                                   </a>
                                   <div class="news-info">
                                        <span>{{ $datas['DataUser']->updated_at }}</span>
                                        <h3><a href="news-detail.html">{{ $datas['DataUser']->nama }}</a></h3>
                                        <p>- Nomer Kartu : {{ $datas['DataUser']->nokartu }}</p>
                                        <p>- Nomer Peserta : {{ $datas['DataUser']->nopeserta }}</p>
                                        <div class="author">
                                             <img src="images/author-image.jpg" class="img-responsive" alt="">
                                             <div class="author-info">
                                                  <h5>DR. KEVIN</h5>
                                                  <p>Spesialis Saraf</p>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                            </div>

                         <div class="col-md-6 col-sm-6">
                              <center>
                                   <button type="submit" class="btn btn-sm btn-primary" id="cf-submit" name="submit">tambah</button>
                              </center>
                         </div>

                       </div>
                  </div>


             </div>
        </div>
   </section>

@endsection