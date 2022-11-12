@extends('frontend.pages.master')

@section('content')
<div class="detail-box">
    <div class="detail-img">
        <img src="{{asset('images/new/n1.jpg')}}" alt="Card image" style="width:100%;height:450px;" />
    </div>
    <p style="margin-top:10px">នាព្រឹកថ្ងៃទី០៦ ខែតុលា ឆ្នាំ២០២២ យោងតាមសំណើរ របស់លោកនាយក លោកគ្រូ អ្នកគ្រូនិងសិស្សានុសិស្សវិទ្យាល័យ២៨មករានោះតាមរយះឯកឧត្តមបណ្ឌិតស៊ាន បូរ៉ាត ប្រធានក្រុមការងាររាជរដ្ឋាភិបាលកម្ពុជា ចុះមូលដ្ឋានស្រុកស្រីស្នំ ខេត្តសៀមរាប ។
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
        <button type="button" class="btn btn-primary"> More...</button>
    </center>
    
</div>
@endsection