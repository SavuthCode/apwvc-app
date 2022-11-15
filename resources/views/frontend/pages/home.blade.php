@extends('frontend.pages.master')
@section("slide-content")
    <div class="slid-content" style="background:gray">
    <div id="demo" class="carousel slide" data-ride="carousel">
    </div>
  </div>
@endsection
@section('content')
<div class="tab" >
    <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#home">ប្រកាសថ្មីៗ</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#video">វីដេអូ</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#picture">រូបភាព</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#other">អត្ថបទផ្សេងៗ</a>
    </li>
    </ul>
    <!-- tab content -->
    <div class="tab-content">
        <!-- new -->
        @include("frontend.pages.tabs.last-new.index")
        <!-- end new -->
        <!-- video -->
        @include("frontend.pages.tabs.videos.index")
        <!-- end video -->
        <!-- Picture -->
        @include("frontend.pages.tabs.picture.index")
        <!-- end Picture -->

        <!-- ather content -->
        @include("frontend.pages.tabs.ather-content.index")
        <!-- end other content -->
      </div>
        <!-- end book -->
    </div>
</div>
@endsection