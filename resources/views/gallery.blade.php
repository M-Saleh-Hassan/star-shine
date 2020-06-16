@extends('layouts.page-header')

@section('title', 'Gallery')
@section('pageTitle', 'Gallery')

@section('pageContent')


<section class="our-gallery">
  <div class="grid-container">
    <div class="box box_1">
      <div class="img-container" data-index="0">
        <img loading="lazy" src="{{asset('/images/DSC_1241-min.jpg')}}" class="img-fluid" alt="">
      </div>
    </div>
    <div class="box box_2">
      <div class="img-container" data-index="1">
        <img loading="lazy" src="{{asset('/images/DSC_1287-min.jpg')}}" class="img-fluid" alt="">
      </div>
    </div>
    <div class="box box_3">
      <div class="img-container" data-index="2">
        <img loading="lazy" src="{{asset('/images/DSC_1250-min.jpg')}}" class="img-fluid" alt="">
      </div>
    </div>
    <div class="box box_4">
      <div class="img-container" data-index="3">
        <img loading="lazy" src="{{asset('/images/DSC_1292-min.jpg')}}" class="img-fluid" alt="">
      </div>
    </div>
    <div class="box box_5">
      <div class="img-container"  data-index="4">
        <img loading="lazy" src="{{asset('/images/DSC_1291-min.jpg')}}" class="img-fluid" alt="">
      </div>
    </div>
    <div class="box box_6">
      <div class="img-container"  data-index="5">
        <img loading="lazy" src="{{asset('/images/DSC_1239-min.jpg')}}" class="img-fluid" alt="">
      </div>
    </div>
    <div class="box box_7">
      <div class="img-container"  data-index="6">
        <img loading="lazy" src="{{asset('/images/DSC_1297-min.jpg')}}" class="img-fluid" alt="">
      </div>
    </div>
    <div class="box box_1">
      <div class="img-container"  data-index="7">
        <img loading="lazy" src="{{asset('/images/DSC_1267-min.jpg')}}" class="img-fluid" alt="">
      </div>
    </div>
    <div class="box box_2">
      <div class="img-container"  data-index="8">
        <img loading="lazy" src="{{asset('/images/DSC_1268-min.jpg')}}" class="img-fluid" alt="">
      </div>
    </div>
    <div class="box box_3">
      <div class="img-container"  data-index="9">
        <img loading="lazy" src="{{asset('/images/DSC_1283-min.jpg')}}" class="img-fluid" alt="">
      </div>
    </div>
    <div class="box box_4">
      <div class="img-container" data-index="10">
        <img loading="lazy" src="{{asset('/images/DSC_1281-min.jpg')}}" class="img-fluid" alt="">
      </div>
    </div>
    <div class="box box_5">
      <div class="img-container" data-index="11">
        <img loading="lazy" src="{{asset('/images/DSC_1255-min.jpg')}}" class="img-fluid" alt="">
      </div>
    </div>
  </div>

  <div class="carousel-modal">
    <div class="close">
      <i class="fas fa-times"></i>
    </div>
    <div class="content">
      <div class="owl-carousel owl-gallery">
        <div class="img-container" data-index="0">
          <img loading="lazy" src="{{asset('/images/DSC_1241-min.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="img-container" data-index="1">
          <img loading="lazy" src="{{asset('/images/DSC_1287-min.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="img-container" data-index="2">
          <img loading="lazy" src="{{asset('/images/DSC_1250-min.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="img-container" data-index="3">
          <img loading="lazy" src="{{asset('/images/DSC_1292-min.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="img-container" data-index="4">
          <img loading="lazy" src="{{asset('/images/DSC_1291-min.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="img-container" data-index="5">
          <img loading="lazy" src="{{asset('/images/DSC_1239-min.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="img-container" data-index="6">
          <img loading="lazy" src="{{asset('/images/DSC_1297-min.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="img-container" data-index="7">
          <img loading="lazy" src="{{asset('/images/DSC_1267-min.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="img-container" data-index="8">
          <img loading="lazy" src="{{asset('/images/DSC_1268-min.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="img-container" data-index="9">
          <img loading="lazy" src="{{asset('/images/DSC_1283-min.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="img-container" data-index="10">
          <img loading="lazy" src="{{asset('/images/DSC_1281-min.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="img-container" data-index="11">
          <img loading="lazy" src="{{asset('/images/DSC_1255-min.jpg')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </div>
</section>


@endsection