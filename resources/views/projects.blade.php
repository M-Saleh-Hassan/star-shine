@extends('layouts.page-header')

@section('title', 'Our Work')
@section('pageTitle', 'Our Work')

@section('pageContent')

<section class="our-work projects">
    <div class="container">
      <h2 class="sec-heading">Our Work </h2>
      <div class="row">

        @for ($i = 1; $i < 7; $i++)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="project flip-card">
            <div class="inner">
              <div class="front">
                <img loading="lazy" src="{{asset('/images/p-min.png')}}" class="img-fluid" alt="">
              </div>
              <div class="back">
                <h4>Dummy Title</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique ad doloribus, nesciunt omnis in recusandae dolorum. Nostrum iste praesentium minima?</p>
                <!-- Launch Modal Button -->
                <button class="more-btn" data-toggle="modal" data-target="#project_modal_{{$i}}" >Read More</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="project_modal_{{$i}}" tabindex="-1" role="dialog" aria-labelledby="project_modal_{{$i}}" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <h3>Project Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit voluptatem harum minus minima officiis exercitationem numquam quam incidunt, rem similique nostrum unde odit nobis quo impedit fugit nulla facere, porro iure autem praesentium voluptas corrupti sequi. Beatae voluptatem molestias, laboriosam rem quidem omnis illo ex necessitatibus eum accusantium quod culpa quam autem quasi? Incidunt, dignissimos. Perferendis quisquam, facilis dolor praesentium amet natus in porro voluptatum. Doloremque, tempora, iusto earum deserunt corrupti, in laborum eaque ipsa repellat fuga voluptatem harum accusantium.</p>
              </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
        @endfor


  </section>


@endsection