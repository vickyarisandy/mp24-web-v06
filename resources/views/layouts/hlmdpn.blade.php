<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

     <title>Health - Medical Website Template</title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <link rel="stylesheet" href="{{ asset('depan/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('depan/css/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('depan/css/animate.css') }}">
     <link rel="stylesheet" href="{{ asset('depan/css/owl.carousel.css') }}">
     <link rel="stylesheet" href="{{ asset('depan/css/owl.theme.default.min.css') }}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{ asset('depan/css/tooplate-style.css') }}">
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">

     {{-- panggil --}}
          @stack('panggil_css')
     {{-- panggil --}}


</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- HEADER -->
     @include('halaman_depan/_part/header')


     <!-- MENU -->
     @include('halaman_depan/_part/menu')
     {{-- batas --}}

     @yield('konten_depan')

     <!-- FOOTER -->
     @include('halaman_depan/_part/footer')


     <!-- SCRIPTS -->
     <script src="{{ asset('depan/js/jquery.js') }}"></script>
     <script src="{{ asset('depan/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('depan/js/jquery.sticky.js') }}"></script>
     <script src="{{ asset('depan/js/jquery.stellar.min.js') }}"></script>
     <script src="{{ asset('depan/js/wow.min.js') }}"></script>
     <script src="{{ asset('depan/js/smoothscroll.js') }}"></script>
     <script src="{{ asset('depan/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('depan/js/custom.js') }}"></script>
     <script type="text/javascript">
		function showTime() {
		    var a_p = "";
		    var today = new Date();
		    var curr_hour = today.getHours();
		    var curr_minute = today.getMinutes();
		    var curr_second = today.getSeconds();
		    if (curr_hour < 12) {
		        a_p = "AM";
		    } else {
		        a_p = "PM";
		    }
		    if (curr_hour == 0) {
		        curr_hour = 12;
		    }
		    if (curr_hour > 12) {
		        curr_hour = curr_hour - 12;
		    }
		    curr_hour = checkTime(curr_hour);
		    curr_minute = checkTime(curr_minute);
		    curr_second = checkTime(curr_second);
		 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
		    }

		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}
		setInterval(showTime, 500);
		</script>

		<!-- Menampilkan Hari, Bulan dan Tahun -->
		<br>
		<script type='text/javascript'>
			var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
			var date = new Date();
			var day = date.getDate();
			var month = date.getMonth();
			var thisDay = date.getDay(),
			    thisDay = myDays[thisDay];
			var yy = date.getYear();
			var year = (yy < 1000) ? yy + 1900 : yy;
			// document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
		</script>
    <script>
        var botmanWidget = {
            title:'pesan',
            aboutText: 'citra medika persada 24',
            introMessage: "✋ Haloo! perkenalkan saya Helpdesk. mulai layanan : <br><br>'mulai',<br>'keluhan',<br>'tentang' ",
            mainColor:'#c02026',
            bubbleBackground:'#c02026',
            headerTextColor: '#fff',

        };
    </script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>


{{-- panggil --}}
@stack('panggil_js')
{{-- panggil --}}
</body>
</html>
