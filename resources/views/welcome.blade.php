@extends('master')
@section('content')
<div class="wrapper" id="contacto-vue">
<div class="top-wrap">
   <!--Header-->
   <header class="header-wrap logo-left home-header ">
      <div class="top-bar">
         <div class="container">
            <div class="top-bar-left">
               <div class="top-bar-info">
               </div>
            </div>
            <div class="top-bar-right">
               <div class="top-bar-info">
               </div>
            </div>
         </div>
      </div>
      <div class="main-header ">
         <div class="container">
            <div class="logo-box">
               <div class="name-box" style=" display:block;">
                  <a href="/">
                     <h1 class="site-name">Villas de San Miguel</h1>
                  </a>
                  <span class="site-tagline">en Santa Cruz, Tlaxcala.</span>
               </div>
            </div>
            <button class="site-nav-toggle">
            <span class="sr-only">Cambiar navegación</span>
            <i class="fa fa-bars fa-2x"></i>
            </button>
            <nav class="site-nav" role="navigation">
               <ul id="menu-main" class="main-nav">
                  <li  class="onetone-menuitem">
                     <a id="onetone-inicio" href="#inicio" >
                     <span>INICIO</span>
                     </a>
                  </li>
                  <li  class="onetone-menuitem">
                     <a id="onetone-servicios" href="#servicios" >
                     <span>Servicios</span>
                     </a>
                  </li>
                  <li  class="onetone-menuitem"><a id="onetone-galeria" href="#galeria" >
                     <span>Galería</span>
                     </a>
                  </li>
                  <li  class="onetone-menuitem">
                     <a id="onetone-creditos" href="#creditos" >
                     <span>Creditos</span>
                     </a>
                  </li>
                  <li  class="onetone-menuitem">
                     <a id="onetone-precios" href="#precios" >
                     <span>Precios</span>
                     </a>
                  </li>
                  <li  class="onetone-menuitem">
                     <a id="onetone-precios" href="#contacto" >
                     <span>Contacto</span>
                     </a>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
      <div class="fxd-header">
         <div class="container">
            <div class="logo-box">
               <div class="name-box" style=" display:block;">
                  <a href="/">
                     <h1 class="site-name">Villas de San Miguel</h1>
                  </a>
                  <span class="site-tagline">en Santa Cruz, Tlaxcala.</span>
               </div>
            </div>
            <button class="site-nav-toggle">
            <span class="sr-only">Cambiar navegación</span>
            <i class="fa fa-bars fa-2x"></i>
            </button>
            <nav class="site-nav" role="navigation">
               <ul id="menu-main" class="main-nav">
                  <li  class="onetone-menuitem"><a id="onetone-inicio" href="#inicio" >
                     <span>INICIO</span></a>
                  </li>
                  <li  class="onetone-menuitem"><a id="onetone-servicios" href="#servicios" >
                     <span>Servicios</span></a>
                  </li>
                  <li  class="onetone-menuitem"><a id="onetone-galeria" href="#galeria" >
                     <span>Galería</span></a>
                  </li>
                  <li  class="onetone-menuitem"><a id="onetone-creditos" href="#creditos" >
                     <span>Creditos</span></a>
                  </li>
                  <li  class="onetone-menuitem"><a id="onetone-precios" href="#precios" >
                     <span>Precios</span></a>
                  </li>
                  <li  class="onetone-menuitem"><a id="onetone-contacto" href="#contacto" >
                     <span>Contacto</span></a>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
   </header>
   <div class="slider-wrap"></div>
</div>
<div class="post-wrap">
   <div class="container-fullwidth">
      <div class="page-inner row no-aside" style="padding-top: 0; padding-bottom: 0;">
         <div class="col-main">
            <section class="post-main" role="main" id="content">
               <article class="page type-page homepage" id="">
                  <section class="home-section-1 onetone-youtube-section video-section" v-if="video">
                     <div id="onetone-youtube-video" class="onetone-player" data-property="{videoURL:'qYrxSkgyosk',containment:'body', showControls:false, autoPlay:true, loop:true, mute:false, startAt:28, opacity:1, addRaster:true, quality:'default'}"></div>
                     <section id="inicio" class="home-section-1 section-banner fullheight verticalmiddle home-banner">
                        <div class="section-content">
                           <div class="home-container container page_container">
                              <div class="magee-animated" data-animationduration="0.9" data-animationtype="bounceInDown" data-imageanimation="no" id="">
                                 <div style="text-align:center;color:#ffffff;">
                                    <div style="font-family: 'Lustria',serif;">
                                       <h1 class="magee-heading section-title heading-border" id=""><span class="heading-inner">VILLAS DE SAN MIGUEL</span></h1>
                                    </div>
                                    <p class="home-section-content" style="margin-top: 50px;">LA MEJOR INVERSIÓN PARA TU FUTURO</p>
                                    <div style="margin-top: 50px;">
                                       <br />
                                    </div>
                                    <div class="banner-sns" style="margin-top: 50px;">
                                       <ul>
                                          <li><a href="#" target="_blank"><i class="fa fa-2 fa-facebook">&nbsp;</i></a></li>
                                          <li><a href="#" target="_blank"><i class="fa fa-2 fa-skype">&nbsp;</i></a></li>
                                          <li><a href="#" target="_blank"><i class="fa fa-2 fa-twitter">&nbsp;</i></a></li>
                                          <li><a href="#" target="_blank"><i class="fa fa-2 fa-linkedin">&nbsp;</i></a></li>
                                          <li><a href="#" target="_blank"><i class="fa fa-2 fa-google-plus">&nbsp;</i></a></li>
                                          <li><a href="#" target="_blank"><i class="fa fa-2 fa-rss">&nbsp;</i></a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="clear"></div>
                        </div>
                     </section>
                     <div class="clear"></div>
                     <script>function changeLabel(state){
                        if( state == 1 )
                        jQuery("#togglePlay i").removeClass("fa-play").addClass("fa-pause");
                        else
                        jQuery("#togglePlay i").removeClass("fa-pause").addClass("fa-play");
                        
                        }
                        function toggleVolume(){
                        var volume =jQuery('#onetone-youtube-video').YTPToggleVolume();
                        if( volume == true )
                        jQuery(".youtube-volume i").removeClass("fa-volume-off").addClass("fa-volume-up");
                        else
                        jQuery(".youtube-volume i").removeClass("fa-volume-up").addClass("fa-volume-off");
                        
                        }
                        
                     </script>
                     <p class="black-65" id="video-controls">
                        <a class="youtube-pause command" id="togglePlay" href="javascript:;" onclick="jQuery('#onetone-youtube-video').YTPTogglePlay(changeLabel)"><i class="fa fa-pause"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="youtube-volume" href="javascript:;" onclick="toggleVolume();"><i class="fa fa-volume-up "></i></a>
                     </p>
                  </section>
                  <section v-if="!video">
                     <div id="carousel-example" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                           <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                           <li data-target="#carousel-example" data-slide-to="1"></li>
                           <li data-target="#carousel-example" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                           <div class="item active" style="max-height: 700px">
                              <a href="#"><img width="100%" src="img/s1.png" /></a>
                              <!--
                                 <div class="carousel-caption">
                                     <h3>Meow</h3>
                                     <p>Just Kitten Around</p>
                                 </div>
                                 -->
                           </div>
                           <div class="item" style="max-height: 700px">
                              <a href="#"><img width="100%" src="img/s2.png" /></a>
                           </div>
                           <div class="item" style="max-height: 700px">
                              <a href="#"><img width="100%" src="img/s3.png" /></a>
                           </div>
                           <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                           <span class="glyphicon glyphicon-chevron-left"></span>
                           </a>
                           <a class="right carousel-control" href="#carousel-example" data-slide="next">
                           <span class="glyphicon glyphicon-chevron-right"></span>
                           </a>
                        </div>
                  </section>
                  <section id="section-2" class="home-section-2 ">
                  <div class="home-container container page_container">
                  <div style="color:;">
                  <div class="magee-animated" data-animationduration="0.9" data-animationtype="fadeInRight" data-imageanimation="no" id="">
                  <div style="color:;">
                  <div class="magee-promo-box">
                  <div class="promo-info">
                  <h4>Nunca es tarde para tener la casa de tus sueños. Conócelas. Agenda tu cita.</h4>              </div>
                  <div class="promo-action">
                  <a onclick="jQuery(function($) {$('#contacto').animatescroll();});" target="_self" class="btn-normal btn-lg">Contacto</a>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="clear"></div>
                  </section><section id="servicios" class="home-section-3 ">
                  <div class="home-container container page_container">
                  <div style="color:;">
                  <h1 class="section-title no-subtitle">Servicios</h1>
                  <div class="row"><div class="col-md-4">
                  <div class="magee-animated" data-animationduration="0.9" data-animationtype="zoomIn" data-imageanimation="no" id="">
                  <div class="magee-feature-box style1" id="" data-os-animation="fadeOut">
                  <div class="icon-box" data-animation=""><i class="feature-box-icon fa fa-home"></i></div>
                  <h3>ESPACIOS</h3>
                  <div class="feature-content">
                  <p>Sala-Comedor <br>
                  Cocina<br>
                  Baño completo<br>
                  Dos recámaras<br>
                  Patio de servicio<br></p>
                  <a href="" target="_blank" class="feature-link"></a></div>
                  </div></div>
                  </div><div class="col-md-4">
                  <div class="magee-animated" data-animationduration="0.9" data-animationtype="zoomIn" data-imageanimation="no" id="">
                  <div class="magee-feature-box style1" id="" data-os-animation="fadeOut">
                  <div class="icon-box" data-animation=""><i class="feature-box-icon fa fa-shield"></i></div>
                  <h3>INSTALACIONES</h3>
                  <div class="feature-content">
                  <p>Loseta vinílica<br>
                  Ventanas de aluminio<br>
                  Instalación de lavadora <br>
                  Calentador y lavadero en patio de servicio<br></p>
                  <a href="" target="_blank" class="feature-link"></a></div>
                  </div></div>
                  </div><div class="col-md-4">
                  <div class="magee-animated" data-animationduration="0.9" data-animationtype="zoomIn" data-imageanimation="no" id="">
                  <div class="magee-feature-box style1" id="" data-os-animation="fadeOut">
                  <div class="icon-box" data-animation=""><i class="feature-box-icon fa fa-map-marker"></i></div>
                  <h3>URBANIZACIÓN</h3>
                  <div class="feature-content">
                  <p>Servicios subterráneos<br>
                  Vista panorámica<br>
                  Caseta de vigilancia<br>
                  Servicio de transporte público de Apizaco y Tlaxcala<br></p>
                  <a href="" target="_blank" class="feature-link"></a></div>
                  </div></div>
                  </div></div>        </div>
                  </div>
                  <div class="clear"></div>
                  </section><section id="galeria" class="home-section-4 ">
                  <div class="home-container container page_container">
                  <div style="color:;">
                  <h1 class="section-title ">Galería</h1>
                  <div class="section-subtitle">Conoce las instalaciones</div>
                  <div class="row no-padding no-margin"><div class="col-md-4">
                  <div class="magee-animated" data-animationduration="0.9" data-animationtype="fadeInLeft" data-imageanimation="no" id="">
                  <div class="magee-feature-box style1" id="" data-os-animation="fadeOut">
                  <div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a href="/wp-content/uploads/2016/09/c-IMG_7355.jpg" rel="portfolio-image"><img src="/wp-content/uploads/2016/09/c-IMG_7355.jpg" alt="" class="feature-img "></a></div></div>
                  </div></div></div><div class="col-md-4">
                  <div class="magee-animated" data-animationduration="0.9" data-animationtype="fadeInDown" data-imageanimation="no" id="">
                  <div class="magee-feature-box style1" id="" data-os-animation="fadeOut">
                  <div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a href="/wp-content/uploads/2016/09/c-IMG_7389.jpg" rel="portfolio-image"><img src="/wp-content/uploads/2016/09/c-IMG_7389.jpg" alt="" class="feature-img "></a></div></div>
                  </div></div></div><div class="col-md-4">
                  <div class="magee-animated" data-animationduration="0.9" data-animationtype="fadeInRight" data-imageanimation="no" id="">
                  <div class="magee-feature-box style1" id="" data-os-animation="fadeOut">
                  <div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a href="/wp-content/uploads/2016/09/c-IMG_7353.jpg" rel="portfolio-image"><img src="/wp-content/uploads/2016/09/c-IMG_7353.jpg" alt="" class="feature-img "></a></div></div>
                  </div></div></div></div><div class="row no-padding no-margin"><div class="col-md-4">
                  <div class="magee-animated" data-animationduration="0.9" data-animationtype="fadeInLeft" data-imageanimation="no" id="">
                  <div class="magee-feature-box style1" id="" data-os-animation="fadeOut">
                  <div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a href="/wp-content/uploads/2016/09/P0A6666.jpg" rel="portfolio-image"><img src="/wp-content/uploads/2016/09/P0A6666.jpg" alt="" class="feature-img "></a></div></div>
                  </div></div></div><div class="col-md-4">
                  <div class="magee-animated" data-animationduration="0.9" data-animationtype="fadeInUp" data-imageanimation="no" id="">
                  <div class="magee-feature-box style1" id="" data-os-animation="fadeOut">
                  <div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a href="/wp-content/uploads/2016/09/c-IMG_7341.jpg" rel="portfolio-image"><img src="/wp-content/uploads/2016/09/c-IMG_7341.jpg" alt="" class="feature-img "></a></div></div>
                  </div></div></div><div class="col-md-4">
                  <div class="magee-animated" data-animationduration="0.9" data-animationtype="fadeInRight" data-imageanimation="no" id="">
                  <div class="magee-feature-box style1" id="" data-os-animation="fadeOut">
                  <div class="img-frame rounded"><div class="img-box figcaption-middle text-center fade-in"><a href="/wp-content/uploads/2016/09/P0A7417.jpg" rel="portfolio-image"><img src="/wp-content/uploads/2016/09/P0A7417.jpg" alt="" class="feature-img "></a></div></div>
                  </div></div></div></div>        </div>
                  </div>
                  <div class="clear"></div>
                  </section><section id="creditos" class="home-section-5 ">
                  <div class="home-container container page_container">
                  <div style="color:;">
                  <h1 class="section-title ">Créditos disponibles</h1>
                  <div class="section-subtitle">Facilidades de pago para que nada te detenga.</div>
                  <div class="row"><div class="col-md-4">
                  <div class="magee-animated" data-animationduration="0.9" data-animationtype="fadeInDown" data-imageanimation="no">
                  <div class="magee-person-box" id="">
                  <div class="person-img-box">
                  <div class="img-box figcaption-middle text-center fade-in"><img src="/wp-content/uploads/2016/08/infonavit.jpg" alt="" /></div>
                  </div>
                  <div class="person-vcard text-center">
                  <h3 class="person-name" style="text-transform: uppercase;">INFONAVIT</h3>
                  <h4 class="person-title" style="text-transform: uppercase;"></h4>
                  <p class="person-desc"></p>
                  <ul class="person-social">
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div><div class="col-md-4">
                  <div class="magee-animated" data-animationduration="0.9" data-animationtype="fadeInDown" data-imageanimation="no">
                  <div class="magee-person-box" id="">
                  <div class="person-img-box">
                  <div class="img-box figcaption-middle text-center fade-in"><img src="/wp-content/uploads/2016/08/fovissste.png" alt="" /></div>
                  </div>
                  <div class="person-vcard text-center">
                  <h3 class="person-name" style="text-transform: uppercase;">FOVISSSTE</h3>
                  <h4 class="person-title" style="text-transform: uppercase;"></h4>
                  <p class="person-desc"></p>
                  <ul class="person-social">
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div><div class="col-md-4">
                  <div class="magee-animated" data-animationduration="0.9" data-animationtype="fadeInDown" data-imageanimation="no">
                  <div class="magee-person-box" id="">
                  <div class="person-img-box">
                  <div class="img-box figcaption-middle text-center fade-in"><img src="/wp-content/uploads/2016/08/hsbc.jpg" alt="" /></div>
                  </div>
                  <div class="person-vcard text-center">
                  <h3 class="person-name" style="text-transform: uppercase;">HSBC</h3>
                  <h4 class="person-title" style="text-transform: uppercase;"></h4>
                  <p class="person-desc"></p>
                  <ul class="person-social">
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div></div><div class="row"><div class="col-md-4">
                  <div class="magee-animated" data-animationduration="0.9" data-animationtype="fadeInDown" data-imageanimation="no">
                  <div class="magee-person-box" id="">
                  <div class="person-img-box">
                  <div class="img-box figcaption-middle text-center fade-in"><img src="/wp-content/uploads/2016/08/bbva.png" alt="" /></div>
                  </div>
                  <div class="person-vcard text-center">
                  <h3 class="person-name" style="text-transform: uppercase;">BBVA BANCOMER</h3>
                  <h4 class="person-title" style="text-transform: uppercase;"></h4>
                  <p class="person-desc"></p>
                  <ul class="person-social">
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div><div class="col-md-4">
                  <div class="magee-animated" data-animationduration="0.9" data-animationtype="fadeInDown" data-imageanimation="no">
                  <div class="magee-person-box" id="">
                  <div class="person-img-box">
                  <div class="img-box figcaption-middle text-center fade-in"><img src="/wp-content/uploads/2016/08/banjercito.jpg" alt="" /></div>
                  </div>
                  <div class="person-vcard text-center">
                  <h3 class="person-name" style="text-transform: uppercase;">BANJERCITO</h3>
                  <h4 class="person-title" style="text-transform: uppercase;"></h4>
                  <p class="person-desc"></p>
                  <ul class="person-social">
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div><div class="col-md-4">
                  <div class="magee-animated" data-animationduration="0.9" data-animationtype="fadeInDown" data-imageanimation="no">
                  <div class="magee-person-box" id="">
                  <div class="person-img-box">
                  <div class="img-box figcaption-middle text-center fade-in"><img src="/wp-content/uploads/2016/08/Banamex.gif" alt="" /></div>
                  </div>
                  <div class="person-vcard text-center">
                  <h3 class="person-name" style="text-transform: uppercase;">BANAMEX</h3>
                  <h4 class="person-title" style="text-transform: uppercase;"></h4>
                  <p class="person-desc"></p>
                  <ul class="person-social">
                  </ul>
                  </div>
                  </div>
                  </div>
                  </div></div>    </div>
                  </div>
                  <div class="clear"></div>
                  </section><section id="precios" class="home-section-7 ">
                  <div class="home-container container page_container">
                  <div style="color:#ffffff;">
                  <h1 class="section-title ">Precios</h1>
                  <div class="section-subtitle" id="contacto">Desde $198,00 + Subsidio Federal</div>
                  </div>
                  </div>
                  <div class="clear"></div>
                  </section>
                  @include('contacto')
                  <section id="section-11" class="home-section-11  onetone-parallax">
                  <div class="home-container container page_container">
                  <div class="home-section-content">
                  <style type="text/css" scoped="scoped">.section-585022b19aeca{ background-repeat:repeat; }.section-585022b19aeca{ background-position :top left;}.section-585022b19aeca{ border-style :none;}.section-585022b19aeca{ padding-top :30px;}.section-585022b19aeca{ padding-bottom :30px;}.section-585022b19aeca{ padding-left :10px;}.section-585022b19aeca{ padding-right :10px;} </style><section class="section magee-section  section-585022b19aeca parallax-scrolling" id=""> <div class="section-content"><div class="container-fullwidth">
                  <div id="" class=" row"><div class=" col-md-4" id="" style="text-align:;">
                  <style  type="text/css">.feature-box-585022b19b395 h3 {font-size:18px;}.feature-box-585022b19b395 h3 {color:#666666;}.feature-box-585022b19b395 .icon-box{color:#666666;}.feature-box-585022b19b395 .icon-box{border-color:#666666;}.feature-box-585022b19b395 .icon-box{border-width:1px;}.feature-box-585022b19b395 .feature-content,.feature-box-585022b19b395 .feature-content p{color:#666666;}.feature-box-585022b19b395 .icon-box{font-size:46px;}</style><div class="magee-feature-box style1  feature-box-585022b19b395" id="" data-os-animation="fadeOut"><div class="icon-box  icon-circle" data-animation="tada"> <i class="feature-box-icon fa fa-map-marker  fa-flip-horizontal "></i></div><h3>UBICACIÓN</h3><div class="feature-content"><p> Villas de San Miguel II ampliación.
                  San Miguel Contla, Tlaxcala. CP 90640.</p><a href="" target="_blank" class="feature-link"></a></div></div>
                  </div><div class=" col-md-4" id="" style="text-align:;">
                  <style  type="text/css">.feature-box-585022b19b64b h3 {font-size:18px;}.feature-box-585022b19b64b h3 {color:#666666;}.feature-box-585022b19b64b .icon-box{color:#666666;}.feature-box-585022b19b64b .icon-box{border-color:#666666;}.feature-box-585022b19b64b .icon-box{border-width:1px;}.feature-box-585022b19b64b .feature-content,.feature-box-585022b19b64b .feature-content p{color:#666666;}.feature-box-585022b19b64b .icon-box{font-size:46px;}</style><div class="magee-feature-box style1  feature-box-585022b19b64b" id="" data-os-animation="fadeOut"><div class="icon-box  icon-circle" data-animation="tada"> <i class="feature-box-icon fa fa-phone   fa-flip-horizontal "></i></div><h3>TELÉFONO</h3><div class="feature-content"><p>Teléfono: 246 462 82 97
                  WhatsApp: 246 170 14 03</p><a href="" target="_blank" class="feature-link"></a></div></div>
                  </div><div class=" col-md-4" id="" style="text-align:;">
                  <style  type="text/css">.feature-box-585022b19b8f4 h3 {font-size:18px;}.feature-box-585022b19b8f4 h3 {color:#666666;}.feature-box-585022b19b8f4 .icon-box{color:#666666;}.feature-box-585022b19b8f4 .icon-box{border-color:#666666;}.feature-box-585022b19b8f4 .icon-box{border-width:1px;}.feature-box-585022b19b8f4 .feature-content,.feature-box-585022b19b8f4 .feature-content p{color:#666666;}.feature-box-585022b19b8f4 .icon-box{font-size:46px;}</style><div class="magee-feature-box style1  feature-box-585022b19b8f4" id="" data-os-animation="fadeOut"><div class="icon-box  icon-circle" data-animation="tada"> <i class="feature-box-icon fa fa-envelope  fa-flip-horizontal "></i></div><h3>E-MAIL</h3><div class="feature-content"><p>Contacto@inmobiliariamalintzi.com.mx</p><a href="" target="_blank" class="feature-link"></a></div></div>
                  </div></div>
                  </div></div> </section>            </div>
                  </div>
                  <div class="clear"></div>
                  </section>            <div class="clear"></div>
               </article>
            </section>
            </div>
         </div>
      </div>
   </div>
   <nav class="navbar navbar-inverse navbar-fixed-bottom">
     <div class="container-fluid">
       <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <br>
             <button onclick="jQuery(function($) {$('#contacto').animatescroll();});" target="_self" class="btn btn-danger btn-lg center-block">Contacto</button>
          </div>
       </div>
     </div>
   </nav>
   <!--Footer-->
   <footer>
      <div class="footer-widget-area">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
               </div>
               <div class="col-md-3">
               </div>
               <div class="col-md-3">
               </div>
               <div class="col-md-3">
               </div>
            </div>
         </div>
      </div>
      <div class="footer-info-area">
         <div class="container">
            <div class="site-info pull-left">
               Villas de San Miguel es un producto de Inmobiliaria Malintzi. 2016                    
            </div>
            <div class="site-social pull-right">
               <ul class="">
                  <li><a target="_blank" rel="" href="#" data-placement="top" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a target="_blank" rel="" href="#" data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a target="_blank" rel="" href="#" data-placement="top" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                  <li><a target="_blank" rel="" href="#" data-placement="top" data-toggle="tooltip" title="YouTube"><i class="fa fa-youtube"></i></a></li>
                  <li><a target="_blank" rel="" href="#" data-placement="top" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
                  <li><a target="_blank" rel="" href="#" data-placement="top" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                  <li><a target="_blank" rel="" href="#" data-placement="top" data-toggle="tooltip" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                  <li><a target="_blank" rel="" href="#" data-placement="top" data-toggle="tooltip" title="Email"><i class="fa fa-envelope"></i></a></li>
                  <li><a target="_blank" rel="" href="#" data-placement="top" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
   </footer>
</div>
@endsection
@section('scripts')
@include('scripts.contacto')
@endsection