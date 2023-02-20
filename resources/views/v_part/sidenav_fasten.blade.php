<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
<div class="brand-sidebar">
    <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img class="hide-on-med-and-down" src="../../../app-assets/images/logo/materialize-logo-color.png" alt="materialize logo"/>
        <img class="show-on-medium-and-down hide-on-med-and-up" src="../../../app-assets/images/logo/materialize-logo.png" alt="materialize logo"/>
        <span class="logo-text hide-on-med-and-down">MP24</span></a>
        <a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
</div>
<ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">

  
            
   
   
    @php
    if (auth('fastens')->user()->type == "dokter") {
    @endphp
    {{-- menu dokter --}}
        <li>
            <a class="{{ Route::is('dokter.home') ? 'active' : '' }}" href="{{ route('dokter.home') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Halaman Utama</span></a>
        </li>
        {{-- --}}
        <li class="navigation-header">
            <a class="navigation-header-text">Menu Dokter </a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        
        <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
                <i class="material-icons">add_to_queue</i>
                <span class="menu-title" data-i18n="Extra Components">Laporan Dokter</span>
            </a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a href="{{route('lap_diok')  }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Range Slider">Pasien</span></a>
                </li>
                
                </ul>
            </div>
        </li>
    {{-- menu dokter --}}
    @php } @endphp

    @php
        if (auth('fastens')->user()->type == 'apotik') {
    @endphp
     {{-- menu Apotik --}}
        <li>
            <a class="{{ Route::is('apotik.home') ? 'active' : '' }}" href="{{ route('apotik.home') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Halaman Utama</span></a>
        </li>
        <li class="navigation-header">
            <a class="navigation-header-text">Menu Apotik </a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('apotik.home') }}">
                <i class="material-icons">person_outline</i>
                <span class="menu-title" data-i18n="User Profile">Profil Apotik</span>
            </a>
        </li>
        <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
                <i class="material-icons">cast</i>
                <span class="menu-title" data-i18n="Cards">Resep</span>
            </a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a href="{{ route('resRsp') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards">resrp</span></a>
                </li>
                <li><a href="{{ route('krm') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards Advance">Kirim</span></a>
                </li>
                <li><a href="{{ route('lap') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards Extended">lap</span></a>
                </li>
                </ul>
            </div>
        </li>
        
      
     {{-- menu Apotik --}}
    @php } @endphp
    
    @php
        if (auth('fastens')->user()->type == 'lab') {
    @endphp
     {{-- menu Laboratorium --}}
        <li>
            <a class="{{ Route::is('lab.home') ? 'active' : '' }}" href="{{ route('lab.home') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Halaman Utama</span></a>
        </li>
        <li class="navigation-header">
            <a class="navigation-header-text">Menu Laboratorium </a>
            <i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan " href="{{ route('lab.home') }}">
                <i class="material-icons">person_outline</i>
                <span class="menu-title" data-i18n="User Profile">Profil Laboratorium</span>
            </a>
        </li>
        <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
                <i class="material-icons">cast</i>
                <span class="menu-title" data-i18n="Cards">Resep</span>
            </a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a href="cards-basic.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards">Cards</span></a>
                </li>
                <li><a href="cards-advance.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards Advance">Cards Advance</span></a>
                </li>
                <li><a href="cards-extended.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards Extended">Cards Extended</span></a>
                </li>
                </ul>
            </div>
        </li>
        
        <li class="bold">
            <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
                <i class="material-icons">add_to_queue</i>
                <span class="menu-title" data-i18n="Extra Components">Laporan Laboratorium</span>
            </a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a href="extra-components-range-slider.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Range Slider">Range Slider</span></a>
                </li>
                <li><a href="extra-components-sweetalert.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Sweetalert">Sweetalert</span></a>
                </li>
            
                </ul>
            </div>
        </li>
     {{-- menu Laboratorium --}}
    @php } @endphp
   
   @php
   if (auth('fastens')->user()->type == 'admin') {
   @endphp 
      {{-- menu Admin --}}
        <li>
            <a class="{{ Route::is('admin.home') ? 'active' : '' }}" href="{{ route('admin.home') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Halaman Utama</span></a>
        </li>
        <li>
            <a class="active" href="{{ route('validator.home') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Halaman Utama</span></a>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Menu Admin</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li ><a href="{{ route('validator_admin') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="ChartJS">Validator</span></a>
      {{-- menu Admin --}}
   @php } @endphp

    @php
    if (auth('fastens')->user()->type == 'validator') {
    @endphp    
     {{-- menu Validator --}}
        <li>
            <a class="{{ Route::is('validator.home') ? 'active' : '' }}" href="{{ route('validator.home') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Halaman Utama</span></a>
        </li>
          
        <li class="navigation-header"><a class="navigation-header-text">Menu Validator</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li>
            <a class="{{ Route::is('validator.validatorPage') ? 'active' : '' }}" href="{{ route('validator.validatorPage') }}">
                <i class="material-icons">radio_button_unchecked</i>
                <span data-i18n="ChartJS">Validator</span>
            </a>
        </li>
     {{-- menu validator --}}
    @php } @endphp

@php
    if (auth('fastens')->user()->type == 'support') {
@endphp
        {{-- menu supprt --}}
            <li>
                <a class="{{ Route::is('support.home') ? 'active' : '' }}" href="{{ route('support.home') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Halaman Utama</span></a>
            </li>
            <li class="navigation-header"><a class="navigation-header-text">Menu Support</a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">pie_chart_outlined</i><span class="menu-title" data-i18n="Chart">Log System</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li><a href="charts-chartjs.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="ChartJS">ChartJS</span></a>
                </li>
                </ul>
            </div>
            </li>
        {{-- menu support --}}
   @php } @endphp

@php
if (auth('fastens')->user()->type == 'manejemen') {
@endphp    
      {{-- menu Manjemen --}}
        <li>
            <a class="{{ Route::is('manej.home') ? 'active' : '' }}" href="{{ route('manej.home') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Halaman Utama</span></a>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Menu Manajemen</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">pie_chart_outlined</i><span class="menu-title" data-i18n="Chart">Monitoring</span></a>
        <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
            <li><a href="charts-chartjs.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="ChartJS">ChartJS</span></a>
            </li>
            </ul>
        </div>
        </li>
      {{-- menu Manjemen --}}
   @php } @endphp


@php
if (auth('fastens')->user()->type == 'administrator') {
@endphp 
   {{-- menu administrator --}}
        <li>
            <a class="{{ Route::is('administrator.home') ? 'active' : '' }}" href="{{ route('administrator.home') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Halaman Utama</span></a>
        </li>
     <li class="navigation-header"><a class="navigation-header-text">Menu Administrator</a><i class="navigation-header-icon material-icons">more_horiz</i>
     </li>
     <li ><a href="{{ route('validator_administrator') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="ChartJS">Validator</span></a>
   {{-- menu administrator --}}
@php } @endphp

    
</ul>
<div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>