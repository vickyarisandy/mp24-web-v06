@extends('layouts.hlmdpn')
@section('konten_depan')
<section id="news" data-stellar-background-ratio="2.5">
    <div class="container">
         <div class="row">

              <div class="col-md-12 col-sm-12">
                   <!-- SECTION TITLE -->
                   <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>DOKTER</h2>
                   </div>
              </div>

              <div class="col-md-4 col-sm-6">
                   <!-- NEWS THUMB -->
                   <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <a href="news-detail.html">
                             <img src="{{asset('depan/images/doktericon.jpg')}}" class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                             <span>March 08, 2018</span>
                             <h3><a href="news-detail.html">DOKTER KEVIN</a></h3>
                             <p>-Rumah Sakit Unair</p>
                             <p>-Rumah Sakit Dr. Soetomo</p>
                             <div class="author">
                                  <img src=" {{ asset('depan/images/author-image.jpg')}} " class="img-responsive" alt="">
                                  <div class="author-info">
                                       <h5>DR. KEVIN</h5>
                                       <p>Spesialis Saraf</p>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>

              <div class="col-md-4 col-sm-6">
                   <!-- NEWS THUMB -->
                   <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                        <a href="news-detail.html">
                             <img src=" {{ asset('depan/images/doktericons2.jpg') }} " class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                             <span>February 20, 2018</span>
                             <h3><a href="news-detail.html"> DOKTER AJI</a></h3>
                             <p>Rumah Sakit Suwandi</p>
                             <div class="author">
                                  <img src=" {{ asset('depan/images/author-image.jpg') }} " class="img-responsive" alt="">
                                  <div class="author-info">
                                       <h5>DOKTER AJI</h5>
                                       <p>SPESIALIS PENYAKIT DALAM</p>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>
              
             <div class="col-md-4 col-sm-6">
                  <!-- NEWS THUMB -->
                       <a href="news-detail.html">
                            <img src="{{asset('depan/images/doktericon.jpg')}}" class="img-responsive" alt="">
                       </a>
                       <div class="news-info">
                        <span>January 27, 2018</span>
                        <h3><a href="news-detail.html">DOKTER BAGUS</a></h3>
                        <p>-Rumah Sakit Muhammadiyah</p>
                        <p>-Rumah Sakit Al-Irsyad</p>
                        <div class="author">
                             <img src=" {{ asset('depan/images/author-image.jpg') }} " class="img-responsive" alt="">
                             <div class="author-info">
                                  <h5>Andrio Abero</h5>
                                  <p>Online Advertising</p>
                                 </div>
                            </div>
                       </div>
                  </div>
             </div>
          
             <div class="col-md-4 col-sm-6">
              <!-- NEWS THUMB -->
              <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                   <a href="news-detail.html">
                        <img src=" {{ asset('depan/images/doktericons2.jpg') }} " class="img-responsive" alt="">
                   </a>
                   <div class="news-info">
                        <span>March 08, 2018</span>
                        <h3><a href="news-detail.html">DOKTER NUHAN</a></h3>
                        <p>Rumah Sakit Mitra Keluarga</p>
                        <div class="author">
                             <img src=" {{ asset('depan/images/author-image.jpg') }} " class="img-responsive" alt="">
                             <div class="author-info">
                                  <h5>DR. NUHAN</h5>
                                  <p>SPESIALIS BEDAH</p>
                             </div>
                        </div>
                   </div>
              </div>
         </div>

         <div class="col-md-4 col-sm-6">
              <!-- NEWS THUMB -->
              <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                   <a href="news-detail.html">
                        <img src="{{asset('depan/images/doktericon.jpg')}}" class="img-responsive" alt="">
                   </a>
                   <div class="news-info">
                        <span>February 20, 2018</span>
                        <h3><a href="news-detail.html">DOKTER FIFA</a></h3>
                        <p>RUMAH SAKIT PUSURA</p>
                        <div class="author">
                             <img src=" {{ asset('depan/images/doktericons2.jpg') }} " class="img-responsive" alt="">
                             <div class="author-info">
                                  <h5>DR. GIZI </h5>
                                  <p>SPESIALIS GIZI</p>
                             </div>
                        </div>
                   </div>
              </div>
         </div>
         
        <div class="col-md-4 col-sm-6">
             <!-- NEWS THUMB -->
             <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                  <a href="news-detail.html">
                       <img src=" {{ asset('depan/images/doktericons2.jpg') }} " class="img-responsive" alt="">
                  </a>
                  <div class="news-info">
                       <span>January 27, 2018</span>
                       <h3><a href="news-detail.html">DR. VICKY ARISANDY</a></h3>
                       <p>.</p>
                       <div class="author">
                            <img src=" {{ asset('depan/images/author-image.jpg') }} " class="img-responsive" alt="">
                            <div class="author-info">
                                 <h5>DR. JANTUNG</h5>
                                 <p>SPESIALIS JANTUNG</p>
                            </div>
                       </div>
                  </div>
             </div>
        </div>

         </div>
    </div>
</section>
@endsection