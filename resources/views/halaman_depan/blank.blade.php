@extends('layouts.hlmdpn')
@push('panggil_css')
    <style>

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

/* batas */

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>


@endpush
@section('konten_depan')

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


<section id="news" data-stellar-background-ratio="2.5">
    <div class="container">
         <div class="row">

              <div class="col-md-12 col-sm-12">
                   <!-- SECTION TITLE -->
                   <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Blank</h2>
                   </div>
              </div>

              <div class="col-md-12 col-sm-12">
                <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" role="form" method="post" action="#">

                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                              <h2>Make an appointment</h2>
                         </div>

                         <div class="wow fadeInUp" data-wow-delay="0.8s">


                         <div class="form-floating mb-3">
                              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                              <label for="floatingInput">Email address</label>
                              </div>
                              <div class="form-floating">
                              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                              <label for="floatingPassword">Password</label>
                              </div>    

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
                                   <br>
                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                              </div>
                         </div>
                    </form>
               </div>


         </div>
    </div>
<hr>

    <div class="container">
     <div class="row">
          <a class="btn btn-primary" href="{{ route('riwayat.manfaat') }}">register</a>
          <a class="btn btn-primary" href="{{ route('riwayat.manfaat') }}">login</a>
          <a class="btn btn-primary" href="{{ route('riwayat.manfaat') }}">profil</a>
          <a class="btn btn-primary" href="{{ route('riwayat.manfaat') }}">update profil</a>
          <a class="btn btn-primary" href="{{ route('riwayat.manfaat') }}">detail profil</a>
          <a class="btn btn-primary" href="{{ route('riwayat.manfaat') }}">tambah keluarga</a>
          <a class="btn btn-primary" href="{{ route('riwayat.manfaat') }}">formulir diagnosa dokter</a>
          <a class="btn btn-primary" href="{{ route('riwayat.manfaat') }}">formulir obat apotik</a>
          <a class="btn btn-primary" href="{{ route('riwayat.manfaat') }}">restuisi upload diagnosa dan obat</a>
          <a class="btn btn-primary" href="{{ route('riwayat.manfaat') }}">riwayat diagnosa</a>
          <a class="btn btn-primary" href="{{ route('riwayat.manfaat') }}">cetak pdf diagnosa</a>

     </div>
    </div>



</section>

<button class="open-button" onclick="openForm()">Chat</button>


<div class="chat-popup" id="myForm">
     <form action="/action_page.php" class="form-container">
       <h1>Chat</h1>
   
       <label for="msg"><b>Message</b></label>
       <textarea placeholder="Type message.." name="msg" required></textarea>
   
       <button type="submit" class="btn">Send</button>
       <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
     </form>
   </div>
   

@endsection

@push('panggil_js')
<script>
     function openForm() {
       document.getElementById("myForm").style.display = "block";
     }
     
     function closeForm() {
       document.getElementById("myForm").style.display = "none";
     }
     </script>
     <script>
          //Get the button
          var mybutton = document.getElementById("myBtn");
          
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function() {scrollFunction()};
          
          function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              mybutton.style.display = "block";
            } else {
              mybutton.style.display = "none";
            }
          }
          
          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }
          </script>
          
          
@endpush