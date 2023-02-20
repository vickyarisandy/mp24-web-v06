@extends('layouts.hlmdpn')
@section('konten_depan')
<section id="appointment" data-stellar-background-ratio="3">
    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
         <center><h2>DOKTER</h2></center>
    </div>

<!-- MAKE AN APPOINTMENT -->
    <div class="container">
         <div class="row">

              <div class="col-md-4 col-sm-6">
                   <img src="images/doktericon.jpg" class="img-responsive" alt="">
              </div>

              <div class="col-md-6 col-sm-6">
                   
                   <!-- CONTACT FORM HERE -->
                   <form id="appointment-form" role="form" method="post" action="#">

                        <!-- SECTION TITLE -->
                        
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <div class="news-thumb wow fadeInUp animated"">
                             <center><h2>DR. Muvid</h2></center>
                             <center><h2 style="color:rgb(18, 209, 235);">SPESIALIS SARAF</h2></center>
                          </div>
                        
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <div class="news-thumb wow fadeInUp animated"">
                               <center> <h3 style="font: size 10%;"> THANKS ATAS KERPECAYAANYA </center></h3>
                                    <p></p>
                               <center><p>Tunggu konfimasi dari dokter dan kiriman resep dari Dr. Muvid</p>
                               Kasih rating ke DR. Muvid ??</center>
                               
                             <div class="author">
                               <img src="images/author-image.jpg" class="img-responsive" alt="">
                               <div class="author-info">
                                    <h5>Resep Anda akan dikirimkan di Notifications</h5>
                                    <p>General Director</p>
                               </div>
                          </div>
                             <div class="col-md-12 col-sm-12">
                                  <button type="submit" class="form-control" id="cf-submit" name="submit">Done</button>
                             </div>
                          </br>
                        </div>
                  </form>
              </div>
           </
         </div>
    </div>
</section>
@endsection