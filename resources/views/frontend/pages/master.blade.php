<!DOCTYPE html>
<html lang="en">
<head>
  <title>សមាគមលើកកម្ពស់ពលករ និង អតីតពលករដើម្បីសប្បុរសធម៌ / APWVC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/detail.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/header.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/footer.css')}}">

  <!-- light box link -->
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="js/lightboxed/lightboxed.css" rel="stylesheet" />
</head>

<body style="background-color:#e9eaed;">
<!-- header -->


@include("frontend.partical.header")
<div class="container">
@yield("slide-content")
</div>

<!-- end header -->
<div class="container" style="font-family:khmer os content;margin-top: -102px;">
<br><br>
<!-- @yield("slide-content") -->
  <!-- <div class="slid-content" style="background:gray">
    <div id="demo" class="carousel slide" data-ride="carousel">
    </div>
  </div> -->
  <div class="wrapper-content" >
    <div class="row introduction">
      <div class="col-md-4 sidebar-col4" style="overflow:hidden">
        <!-- sidar -->
          @include("frontend.partical.sidebar")
        <!-- end sidebar -->
      </div>
      <div class="col-md-8">
       @yield('content')
      </div>
    </div>
    <br>
</div>
<div class="container-fruid" style="background:#fff">
<div class="container">
<br/>
<div class="slider">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="nav-item" >
        <a class="nav-link google-play active" data-toggle="tab" href="#menu1" style="padding: 0.5rem 6rem;display:block;color:black;">បញ្ចូលកម្មវិធីទូរស័ព្ទ​ andriod <img class="img-google-play" src="{{asset('frontend/images/app-store.png')}}" style="width: 130px;
    height: 35px;"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link app-store" data-toggle="tab" href="#menu2" style="padding: 0.5rem 5rem;display:block;color:black;">បញ្ចូលកម្មវិធីទូរស័ព្ទ​ IOS <img class="img-app-store" src="{{asset('frontend/images/app-store.png')}}" style="width: 130px;
    height: 35px;"></a>
      </li>
    </ul>
    <br>
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane container active" id="menu1">
        <div class="owl-carousel">
          <div>
            <img src="{{asset('frontend/images/new/n1.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
          <div>
          <img src="{{asset('frontend/images/new/n2.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
          <div>
          <img src="{{asset('frontend/images/new/n3.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
          <div>
          <img src="{{asset('frontend/images/new/n4.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
          <div>
          <img src="{{asset('frontend/images/new/n5.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
        </div>
      </div>
      <div class="tab-pane container fade" id="menu2">
        <div class="owl-carousel">
          <div>
            <img src="{{asset('frontend/images/new/n1.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
          <div>
          <img src="{{asset('frontend/images/new/n2.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
          <div>
          <img src="{{asset('frontend/images/new/n3.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
          <div>
          <img src="{{asset('frontend/images/new/n4.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
          <div>
          <img src="{{asset('frontend/images/new/n5.jpg')}}" style="height:100px;border-radius:10%;">
          </div>
        </div>
      </div>
    </div>
    <br>
  </div>
</div>
</div>
</div>

@include("frontend.partical.footer")

</body>


@yield("script")
<script src="jquery.min.js"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/lightboxed/lightboxed.js')}}"></script>
</script>
<script>
(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
  })
});
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "5px";
    document.getElementById("logo").style.fontSize = "10px";
  } else {
    document.getElementById("navbar").style.padding = "0px";
    document.getElementById("logo").style.fontSize = "10px";
  }
}


window.onscroll = function() {myFunction()};

var navbar = document.querySelector("nav");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
// function myFunction(x) {
//   x.classList.toggle("change");
// }
</script>
</html>
