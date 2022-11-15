@extends('frontend.pages.master')

@section('content')
<div class="detail-box">
    <p class="detail-title">សកម្មភាពសប្បុរសធម៌របស់ថ្នាក់ដឹកនាំសមាគមនាពេលកន្លងមក<br><span>Public on : 2022-11-14</span></p>
    <div class="detail-img">
        <div id="carbon-block" style="margin:30px auto"></div>
        <div style="margin:30px auto"></div>
        <img class="lightboxed" rel="group1" src="https://www.jqueryscript.net/dummy/1.jpg" data-link="https://www.jqueryscript.net/dummy/1.jpg" alt="Image Alt" data-caption="Image Caption" style="width:100%" />
        <div class=" row_lightbox">
            <div class=" col_lightbox">
            <img class="lightboxed" rel="group1" src="https://www.jqueryscript.net/dummy/2.jpg" data-link="https://www.jqueryscript.net/dummy/2.jpg" alt="Image Alt" data-caption="Image Caption" style="width:100%;height:100%">
            </div>
            <div class=" col_lightbox">
            <img class="lightboxed" rel="group1" src="https://www.jqueryscript.net/dummy/3.jpg" data-link="https://www.jqueryscript.net/dummy/3.jpg" alt="Image Alt" data-caption="Image Caption" style="width:100%;height:100%"/>
            </div>
            <div class=" col_lightbox">
            <img class="lightboxed" rel="group1" src="https://www.jqueryscript.net/dummy/4.jpg" data-link="https://www.jqueryscript.net/dummy/4.jpg" alt="Image Alt" data-caption="Image Caption" style="width:100%;height:100%"/>
            </div>
            <div class=" col_lightbox">
            <img class="lightboxed" rel="group1" src="https://www.jqueryscript.net/dummy/5.jpg" data-link="http://www.youtube.com/embed/Rix_3b9ThLI?list=PL8zglt-LDl-iwBHEl3Pw1IhWGp9cfgMrc" style="width:100%;height:100%" />
            </div>
        </div>
    </div>
    <p class="detail_desc"style="margin-top:10px">នាព្រឹកថ្ងៃទី០៦ ខែតុលា ឆ្នាំ២០២២ យោងតាមសំណើរ របស់លោកនាយក លោកគ្រូ អ្នកគ្រូនិងសិស្សានុសិស្សវិទ្យាល័យ២៨មករានោះតាមរយះឯកឧត្តមបណ្ឌិតស៊ាន បូរ៉ាត ប្រធានក្រុមការងាររាជរដ្ឋាភិបាលកម្ពុជា ចុះមូលដ្ឋានស្រុកស្រីស្នំ ខេត្តសៀមរាប ។
លោកចាន់ ឃីន និងលោកផុន សាមាន អនុប្រធានគណះកម្មាធិការប្រតិបត្តិជាតំណាងដ៏ខ្ពង់ខ្ពស់របស់លោកជំទាវ ឧកញ៉ា ឡេង ចាន់ណា ប្រធានគណះកម្មាធិការប្រតិបត្តិនៃសមាគមលើកកម្ពស់ពលករ និងអតីតពលករដើម្បីសប្បុរសធម៍ បាននាំយកថវិកាចំនួន 3,600,000៛ ទៅប្រគល់ជូនលោកនាយកនិងសិស្សានុសិស្សនៃវិទ្យាល័យ២៨មករា ស្រុកស្រីស្នំ ខេត្តសៀមរាប ដើម្បីបង្ហើយកញ្ចុះសិក្សារ។</p>
    <!-- <iframe width="100%" height="450px" src="https://www.youtube.com/embed/eBMwXp1bbKA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
</div>
<br>
<div class="detail-share">
    <div class="play-icon-yt float-left">
        
    </div>
    <div class="fb-share-button float-right" 
        data-href="https://www.your-domain.com/your-page.html" 
        data-layout="button_count">
    </div>
</div>
<br>
<ul class="nav nav-tabs home-tabs hot-new" role="tablist">
    <li class="title font-strong">
        <a href="https://news.sabay.com.kh/article/tag/video-clip">Relation Post <i class="glyphicon glyphicon glyphicon-menu-right" aria-hidden="true"></i>
            <div class="corner">

            </div>
        </a>
    </li>
</ul>

<div class="tab" >
    <div class="tab-content">
     @include('frontend.pages.tabs.detail.relation-info')
    </div>
    <br>
    <center>
        <button type="button" class="btn btn-primary"> Read More...</button>
    </center>
    
</div>
@endsection

@section('script')
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script>
try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>
@endsection