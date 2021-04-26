<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  {!! SEOMeta::generate() !!}
  {!! OpenGraph::generate() !!}
  {!! Twitter::generate() !!}
  <meta name="author" content="Pat Web">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <meta name="bingbot" content="index, follow" />
  
  <meta name="google-site-verification" content="08vH259n_EOR1iUrir9qDPSJC8V4gKi4aDZDlOtQEhc" />
  <meta name="msvalidate.01" content="C354613AA7FABFA82111FBAC4B694752" />
  <link rel="shortcut icon" type="image/png" href="https://patict.vn/index/img/logogo.png"/>

  <link rel="stylesheet" href="{!! asset('index/css/style.css') !!}">
  <link rel="stylesheet" href="{!! asset('index/css/responsive1024.css') !!}">
  <link rel="stylesheet" href="{!! asset('index/css/responsive768.css') !!}">
  <link rel="stylesheet" href="{!! asset('index/css/responsive765.css') !!}">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- <link rel="stylesheet" type="text/css" href="{!! asset('index/css/normalize.css') !!}" /> -->
<!--   <link rel="stylesheet" type="text/css" href="{!! asset('index/css/demo.css') !!}" /> -->
<!--   
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"> -->

  <!-- <link rel="stylesheet" type="text/css" href="{!! asset('index/css/slick-theme.css')!!}"> -->
<!--   <link rel="stylesheet" href="{!! asset('index/css/owl.theme.default.min.css') !!}">
 -->
  <!-- <link rel="stylesheet" type="text/css" href="{!! asset('index/css/slick.css')!!}"> -->
  <link rel="stylesheet" type="text/css" href="{!! asset('index/css/tabs.css') !!}" />
  <link rel="stylesheet" type="text/css" href="{!! asset('index/css/tabstyles.css') !!}" />

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="{!! asset('index/css/bootstrap.min.css') !!}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="{!! asset('index/css/owl.carousel.min.css') !!}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
  <link rel="canonical" href="https://patict.vn/">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171695062-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171695062-2');
</script>

</head >
<body >
  <?php
        use App\Truycap;
        use Carbon\Carbon;
        
        $dt = Carbon::now()->toDateString();
        $check = DB::table('truycaps')->where('ngay',$dt)->count();

        $update1 = DB::table('truycaps')->where('ngay',$dt)->first();

        if($check == 1)
        {
            $update = Truycap::find($update1->id);
            $update->dem = $update1->dem + 1;

            $update->save();
        }
        else
        {
            $new = New Truycap();
            $new->dem = 1;
            $new->ngay = $dt;
            $new->save();
        }
?>


<section id="tieude">
  <div class="full-container">
    <div class="tieude1">
      <div class="container">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-7">
              <div id="Welcome_to_PAT_">
                <span>Welcome to PAT!</span>
              </div>
            </div>
            <div class="col-md-5">
              <div id="pin">
                <a href="https://www.google.com/maps/place/PAT+Information+%26+Communications+Technology+Co.,Ltd/@16.0587956,108.1704992,17z/data=!3m1!4b1!4m5!3m4!1s0x3142197b6805cfe7:0x708a12a0cd9b8b11!8m2!3d16.0587905!4d108.1726879?hl=vi-VN"><i class='fas fa-map-marker-alt' style='font-size:16px;color: black;'></i></a>
              </div>
              
              <div id="Group_12">
                <div id="call_answer">
                  <a href="tel:0903190889">
                  <i class="fa fa-phone" style="font-size:16px;color: rgba(153,201,61,1);transform: rotate(90deg);"></i>
                  </a>
                </div>
                <div id="ID0903190889">
                  <span style="color: rgba(153,201,61,1);font-weight: bold;">0905277898</span>
                </div>
              </div>
              <div id="Group_15">

                <i class="fab fa-twitter" style='font-size:16px;color: #0654e2;margin-left: 10px;'></i>
                <img src="{!! asset('index/img/instagram.svg')!!}" alt="" style="width: 14px;margin-top: -1px;margin-left: 6px;">
                <a href="https://www.facebook.com/patict.vn/">
                <i class="fab fa-facebook-f"  style='font-size:16px;color: rgb(3, 57, 230);margin-left: 5px;'></i></a>
                <a href="contact@patict.vn"><i class="fas fa-envelope" style='font-size:16px;color: rgba(153,201,61,1);margin-left: 5px;'></i></a>
                
                
              </div>
              
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('index.header')

@yield('content')

@include('index.footer')
<div class="hotline-phone-ring-wrap">   
      <div class="hotline-phone-ring">
      <div class="hotline-phone-ring-circle"></div>
      <div class="hotline-phone-ring-circle-fill"></div>
      <div class="hotline-phone-ring-img-circle"> 
        <a href="tel:0905277898" class="pps-btn-img"> 
        <img src="{!! asset('index/img/icon-phone.png') !!}" alt="so dien thoai" width="50"> </a></div>
    </div>    
    <div class="hotline-bar"> 
      <a href="tel:0905.277.898"> <span class="text-hotline">0905.277.898
</span> </a>
    </div>       

</div>



<div class="float-icon-hotline">      
    <ul class ="left-icon hotline">
      <li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton" href="https://zalo.me/"><i class="fa fa-zalo animated infinite tada"></i><span>Zalo</span></a></li>
      <li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton" href="https://www.facebook.com/messages/t/375222879700335"><i class="fa fa-messenger animated infinite tada"></i><span>Facebook</span></a></li>
    </ul>   
</div>
<div class="bottom-contact">
<ul>
<li>
<a id="goidien" href="tel:0905277898">
<img src="{!! asset('index/img/icon-phone2.png') !!}"/>
<br>
<span>Gọi điện</span>
</a>
</li>
<li>
<a id="nhantin" href="sms:0905277898">
<img src="{!! asset('index/img/icon-sms2.png') !!}"/>
<br>
<span>Nhắn tin</span>
</a>
</li>
<li>
<a id="chatzalo" href="">
<img src="{!! asset('index/img/icon-zalo2.png') !!}"/>
<br>
<span>Chat Zalo</span>
</a>
</li>
<li>
<a id="chatfb" href="https://www.facebook.com/messages/t/100342581608458">
<img src="{!! asset('index/img/icon-mesenger2.png') !!}"/>
<br>
<span>Messenger</span>
</a>
</li>
</ul>
</div>
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
<!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <!--   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
   <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <script src="{!! asset('index/js/bootstrap.min.js')!!}"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   
    <script src="{!! asset('index/js/modernizr.custom.js')!!}"></script>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<script type="text/javascript">
$(document).ready(function() {
 $('.share').click(function() {
 var NWin = window.open($(this).prop('href'), '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
 if (window.focus)
 {
 NWin.focus();
 }
 return false;
 });
});
</script>
<script>
  $(document).ready(function(){
  $('#myTopnav a').filter(function(){return this.href==location.href})
  .addClass('active').siblings().removeClass('active')
  $('#myTopnav a').click(function(){
    $('the').removeClass("active");
    $(this).addClass("active");
});
});
</script>


<script src="{!! asset('index/js/owl.carousel.min.js') !!}"></script>
<script>
    $('#owl-example').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplayTimeout:3000,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:2
            },
            1000:{
                items:5
            }
        }
    })

</script>
<script>
  $("#owl-demo").owlCarousel({
    loop:true,
    margin:10,
    nav:true,
  autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    items : 1,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [979,3]
 
  });


</script>
<script>
  $("#owl-demoda").owlCarousel({
    loop:true,
    margin:10,
    nav:true,
  autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    items : 1,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [979,3]
 
  });
</script>
<script>
    $('#owl-thanhcong').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    })
 $('.kh').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:6
            }
        }
    })
 $('.kh-dt-body').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
     autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
})
</script>
<script>
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 35 || document.documentElement.scrollTop > 35) {
    document.getElementById("myTopnav").style.padding = "0px 0px";
    document.getElementById("myTopnav").style.background = "#f1f1f1";
    document.getElementById("logogo").style.width = "80%";
  } else {
    document.getElementById("myTopnav").style.padding = "60px 10px";
    document.getElementById("myTopnav").style.background = "rgb(241 241 241 / 0%)";
    document.getElementById("logogo").style.width = "140%";
  }
}
</script>
<script>
  $(document).ready(function(){
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll > 35) {
      $(".dropdown-content").css("top" , "49px");
    }
    else{
       $(".dropdown-content").css("top" , "107px");
    }
  })
})
</script>
<script>

var dropdown = document.getElementsByClassName("dropdown-d");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

<!-- #CODE ẨN/HIỆN MỤC LỤC -->
<script>
var acc = document.getElementsByClassName("accordion");

for (var i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "patict.vn",
    "alternateName": "the company",
    "url": "{{ route('/') }}"
}
</script>
<script src="{!! asset('index/js/cbpFWTabs.js')!!}"></script>
    <script>
      (function() {

        [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
          new CBPFWTabs( el );
        });

      })();
</script>
<!-- <script src="{!! asset('index/js/slick.js') !!}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">

 $(".center").slick({
        dots: true,
        infinite: true,
       
        // slidesToShow: 3,
        mobileFirst:true,
        slidesToScroll: 1,
        autoplayTimeout:3000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
           {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
          
      });
      
</script> -->
</html>