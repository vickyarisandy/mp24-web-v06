@extends('layouts.hlmdpn')
@section('konten_depan')

  <!-- HOME slider -->
  <section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="container">
         <div class="row">

                   <div class="owl-carousel owl-theme">
                        <div class="item item-first">
                             <div class="caption">
                                  <div class="col-md-offset-1 col-md-10">
                                       <h3>Let's make your life happier</h3>
                                       <h1> PT Medika Persada 24 </h1>
                                       <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                                  </div>
                             </div>
                        </div>

                        <div class="item item-second">
                             <div class="caption">
                                  <div class="col-md-offset-1 col-md-10">
                                       <h3>Aenean luctus lobortis tellus</h3>
                                       <h1>New Lifestyle</h1>
                                       <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                  </div>
                             </div>
                        </div>

                        <div class="item item-third">
                             <div class="caption">
                                  <div class="col-md-offset-1 col-md-10">
                                       <h3>Pellentesque nec libero nisi</h3>
                                       <h1>Your Health Benefits</h1>
                                       <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                                  </div>
                             </div>
                        </div>
                   </div>

         </div>
    </div>
</section>


<!-- ABOUT -->
<section id="about">
    <div class="container">
         <div class="row">

              <div class="col-md-6 col-sm-6">
                   <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.6s">Konsultasi Dokter Online atau Offline </h2>
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                             <p>
                              Dalam era pandemi COVID-19 ini, satu kunci utama untuk menghentikan penyebaran virus corona adalah dengan social distancing / physical distancing. Berbagai pihak juga menyerukan agar membatasi pertemuan dan menghindari kerumunan.
                             </p>
                             <p>Karena itulah kami hadir secara online untuk Anda dalam bentuk layanan Telemedicine. Telemedicine adalah suatu teknologi yang memungkinkan pasien berdiskusi dengan dokter secara private, tanpa harus bertatap muka secara langsung.
                         </p>
                         <p>Keunggulan kami :
                         </p>
                        </div>
                        <figure class="profile wow fadeInUp" data-wow-delay="1s">
                             <img src="{{ asset('depan/images/author-image.png') }}" class="img-responsive" alt="">
                             <figcaption>
                                  <h3>&nbsp</h3>
                                  <p>Didukung oleh tenaga medis profesional yang kompeten</p>
                             </figcaption>
                        </figure>
                        <figure class="profile wow fadeInUp" data-wow-delay="1s">
                         <img src="{{ asset('depan/images/author-image.png') }}" class="img-responsive" alt="">
                         <figcaption>
                              <h3>&nbsp</h3>
                              <p>Akses mudah dan cepat</p>
                         </figcaption>
                    </figure>
                    <figure class="profile wow fadeInUp" data-wow-delay="1s">
                         <img src="{{ asset('depan/images/author-image.png') }}" class="img-responsive" alt="">
                         <figcaption>
                              <h3>&nbsp</h3>
                              <p>Tersertifikasi</p>
                         </figcaption>
                    </figure>
                   </div>
              </div>
              
         </div>
    </div>
</section>


<!-- TEAM -->
<section id="team" data-stellar-background-ratio="1">
    <div class="container">
         <div class="row">

              <div class="col-md-6 col-sm-6">
                   <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.1s">Layanan Kami</h2>
                        <p>Penyedia layanan medis dan kesehatan yang terintegrasi

                    </p>
                   </div>
              </div>

              <div class="clearfix"></div>

              <div class="col-md-4 col-sm-6">
                   <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                    <a href="{{ route('obat') }}">
                        <img src="{{ asset('depan/images/team-image1.jpg') }}" class="img-responsive" alt="apotik">
                    </a>
                             <div class="team-info">
                                   <h3> 
                                        <a href="HTML/auth-login-basic.html">APOTEK </a> 
                                   </h3>
                                  <div class="team-contact-info">
                                   <center>
                                   <p>Konsultasi dan pelayanan resep obat-obatan yang dapat dibeli di apotek terdekat di kota Anda</p>
                              </center>
                                  </div>
                                  <ul class="social-icon">
                                       <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                       <li><a href="#" class="fa fa-envelope-o"></a></li>
                                  </ul>
                             </div>
                   </div>
              </div>

              <div class="col-md-4 col-sm-6">
                   <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                         <a href="{{ route('dokter') }}">
                        <img src="{{ asset('depan/images/team-image2.jpg') }}" class="img-responsive" alt="dokter">
                    </a>
                             <div class="team-info">
                                  <h3> DOKTER </h3>
                                  <div class="team-contact-info">
                                       <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                       <p><i class="fa fa-envelope-o"></i> <a href="#">pregnancy@company.com</a></p>
                                  </div>
                                  <ul class="social-icon">
                                       <li><a href="#" class="fa fa-facebook-square"></a></li>
                                       <li><a href="#" class="fa fa-envelope-o"></a></li>
                                       <li><a href="#" class="fa fa-flickr"></a></li>
                                  </ul>
                             </div>

                   </div>
              </div>

              <div class="col-md-4 col-sm-6">
                   <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                         <a href="{{route('dtRS')}}">
                              <img src="{{ asset('depan/images/team-image3.jpg') }}" class="img-responsive" alt="">
                         </a>
                             <div class="team-info">
                                  <h3> KLINIK </h3>
                                  <p>Cardiology</p>
                                  <div class="team-contact-info">
                                       <p><i class="fa fa-phone"></i> 010-040-0140</p>
                                       <p><i class="fa fa-envelope-o"></i> <a href="#">cardio@company.com</a></p>
                                  </div>
                                  <ul class="social-icon">
                                       <li><a href="#" class="fa fa-twitter"></a></li>
                                       <li><a href="#" class="fa fa-envelope-o"></a></li>
                                  </ul>
                             </div>

                   </div>
              </div>
              
         </div>
    </div>
</section>


<!-- NEWS -->
<section id="news" data-stellar-background-ratio="2.5">
    <div class="container">
         <div class="row">

              <div class="col-md-12 col-sm-12">
                   <!-- SECTION TITLE -->
                   <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Latest News</h2>
                   </div>
              </div>

              <div class="col-md-4 col-sm-6">
                   <!-- NEWS THUMB -->
                   <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <a href="news-detail.html">
                             <img src=" {{ asset('depan/images/news-image1.jpg') }} " class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                             <span>March 08, 2018</span>
                             <h3><a href="news-detail.html">About Amazing Technology</a></h3>
                             <p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>
                             <div class="author">
                                  <img src=" {{asset('depan/images/author-image.png')}} " class="img-responsive" alt="">
                                  <div class="author-info">
                                       <h5>Jeremie Carlson</h5>
                                       <p>CEO / Founder</p>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>

              <div class="col-md-4 col-sm-6">
                   <!-- NEWS THUMB -->
                   <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                        <a href="news-detail.html">
                             <img src=" {{asset('depan/images/news-image2.jpg')}} " class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                             <span>February 20, 2018</span>
                             <h3><a href="news-detail.html">Introducing a new healing process</a></h3>
                             <p>Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>
                             <div class="author">
                                  <img src="{{ asset('depan/images/author-image.png') }}" class="img-responsive" alt="">
                                  <div class="author-info">
                                       <h5>Jason Stewart</h5>
                                       <p>General Director</p>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>

              <div class="col-md-4 col-sm-6">
                   <!-- NEWS THUMB -->
                   <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                        <a href="news-detail.html">
                             <img src=" {{ asset('depan/images/news-image3.jpg') }} " class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                             <span>January 27, 2018</span>
                             <h3><a href="news-detail.html">Review Annual Medical Research</a></h3>
                             <p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>
                             <div class="author">
                                  <img src=" {{asset('depan/images/author-image.png')}} " class="img-responsive" alt="">
                                  <div class="author-info">
                                       <h5>Andrio Abero</h5>
                                       <p>Online Advertising</p>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>

         </div>
    </div>
</section>


<!-- MAKE AN APPOINTMENT -->
<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
         <div class="row">

              <div class="col-md-6 col-sm-6">
                   <img src=" {{ asset('depan/images/appointment-image.jpg') }} " class="img-responsive" alt="">
              </div>

              <div class="col-md-6 col-sm-6">
                   <!-- CONTACT FORM HERE -->
                   <form id="appointment-form" role="form" method="post" action="#">
                    
                         <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                             <h2>Make an appointment</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                             <div class="col-md-6 col-sm-6">
                                  <label for="name">Name</label>
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                             </div>

                             <div class="col-md-6 col-sm-6">
                                  <label for="email">Email</label>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                             </div>

                             <div class="col-md-6 col-sm-6">
                                  <label for="date">Select Date</label>
                                  <input type="date" name="date" value="" class="form-control">
                             </div>

                             <div class="col-md-6 col-sm-6">
                                  <label for="select">Select Department</label>
                                  <select class="form-control">
                                       <option>General Health</option>
                                       <option>Cardiology</option>
                                       <option>Dental</option>
                                       <option>Medical Research</option>
                                  </select>
                             </div>

                             <div class="col-md-12 col-sm-12">
                                  <label for="telephone">Phone Number</label>
                                  <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                                  <label for="Message">Additional Message</label>
                                  <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                  <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                             </div>
                        </div>
                  </form>
              </div>

         </div>
    </div>
</section>


<!-- GOOGLE MAP -->
<section id="google-map">
  <!-- How to change your own map point
          1. Go to Google Maps
          2. Click on your location point
          3. Click "Share" and choose "Embed map" tab
          4. Copy only URL and paste it within the src="" field below
  -->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126646.25708172089!2d112.64264252906786!3d-7.275443784494196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf8381ac47f%3A0x3027a76e352be40!2sSurabaya%2C%20Kota%20SBY%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1660544094328!5m2!1sid!2sid" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>           


    
@endsection