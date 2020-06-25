@extends('layouts.page-header')

@section('title', 'About Us')
@section('pageTitle', 'About Us')

@section('pageContent')

  <section class="video-section">
    <div class="container">
      <figure id="videoContainer">
        <video id="video" controls preload="metadata" poster="{{asset('/images/2.png')}}">
            <source src="{{asset('/images/video.mp4')}}" type="video/mp4">
            <source src="{{asset('/images/video.webm')}}" type="video/webm">
            <source src="{{asset('/images/video.ogg')}}" type="video/ogg">
        </video>
      </figure>
    </div>
  </section>

  <section class="about-header py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-5 pb-3">
          <div class="about-comp">
            <div class="img-container md-none">
              <img src="{{asset('/images/p-min.png')}}" class="img-fluid" alt="">
            </div>
            <div class="caption">
              <h4>About The Company</h4>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas dolorem praesentium perspiciatis id. Iure cum, distinctio libero quos vel doloremque vero. Non, quisquam nemo! Temporibus unde earum nostrum voluptates consequatur.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-7 pb-3">

          <div class="skitter skitter-large">
            <ul>
              <li>
                <a href="#cut">
                  <img src="{{asset('/images/DSC_1250-min.jpg')}}" class="swapBarsBack" />
                </a>
              </li>
              <li>
                <a href="#swapBlocks">
                  <img src="{{asset('/images/DSC_1265-min.jpg')}}" class="horizontal" />
                </a>
              </li>
              <li>
                <a href="#swapBarsBack">
                  <img src="{{asset('/images/DSC_1287-min.jpg')}}" class="showBars" />
                </a>
              </li>
              <li>
                <a href="#cut">
                  <img src="{{asset('/images/DSC_1292-min.jpg')}}" class="swapBarsBack" />
                </a>
              </li>
              <li>
                <a href="#swapBlocks">
                  <img src="{{asset('/images/DSC_1241-min.jpg')}}" class="horizontal" />
                </a>
              </li>
              <li>
                <a href="#swapBarsBack">
                  <img src="{{asset('/images/DSC_1257-min.jpg')}}" class="showBars" />
                </a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="tabs-info">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Lorem dolor amet.</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Lorem dolor amet.</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Lorem dolor amet.</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Lorem dolor amet.</a>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <h4>Lorem, ipsum dolor.</h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error excepturi vitae provident est illo molestias esse! Sequi blanditiis qui temporibus numquam maxime dolores tempora neque a perferendis? Qui, nihil sunt reiciendis dicta a tempore nesciunt eligendi iusto ea tenetur. Provident quo nobis dolorum voluptatem facere sint expedita vero in aut!</p>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
              <h4>Lorem, ipsum dolor.</h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error excepturi vitae provident est illo molestias esse! Sequi blanditiis qui temporibus numquam maxime dolores tempora neque a perferendis? Qui, nihil sunt reiciendis dicta a tempore nesciunt eligendi iusto ea tenetur. Provident quo nobis dolorum voluptatem facere sint expedita vero in aut!</p>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              <h4>Lorem, ipsum dolor.</h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error excepturi vitae provident est illo molestias esse! Sequi blanditiis qui temporibus numquam maxime dolores tempora neque a perferendis? Qui, nihil sunt reiciendis dicta a tempore nesciunt eligendi iusto ea tenetur. Provident quo nobis dolorum voluptatem facere sint expedita vero in aut!</p>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              <h4>Lorem, ipsum dolor.</h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error excepturi vitae provident est illo molestias esse! Sequi blanditiis qui temporibus numquam maxime dolores tempora neque a perferendis? Qui, nihil sunt reiciendis dicta a tempore nesciunt eligendi iusto ea tenetur. Provident quo nobis dolorum voluptatem facere sint expedita vero in aut!</p>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </section>

  

  <section id="contact" class="contact">
    <div class="row mx-0">
      <div class="col-md-6 form-container py-4">
        <div class="form">
          <div class="form-head">
            <h2>Send us a message</h2>
            <h5>Please fill our form and we will get back to you.</h5>
          </div>
          <form action="" method="POST">
            <div class="form-group">
              <input id="name" class="form-control custom-input" type="text" name="name" placeholder="Name *">
              <p class="err">This field is required</p>
            </div>
            <div class="form-group">
              <input id="phone" class="form-control custom-input" type="text" name="tel" placeholder="Tel *">
              <p class="err">This field is required</p>
            </div>
            <div class="form-group">
              <input id="email" class="form-control custom-input" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input id="company" class="form-control custom-input" type="text" name="company" placeholder="Company">
            </div>
            <div class="form-group">
              <textarea id="message" class="form-control custom-input" type="text" name="message" placeholder="Inquiry *"></textarea>
              <p class="err">This field is required</p>
            </div>
            <div class="form-group pt-3">
              <button id="submit-btn" class="more-btn">Send message</button>
            </div>
          </form>
        </div>
      </div>

      <div class="col-md-6 contact-us-container py-4">
        <div class="contact-us">
          <div class="contact-us-head">
            <h2>Contact us</h2>
          </div>
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13814.734891721942!2d31.2371055!3d30.0459303!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdaa483265c44db76!2sStar%20Shine%20Tours!5e0!3m2!1sen!2seg!4v1592057953648!5m2!1sen!2seg" width="100%" height="250px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="place">
            <h4>Contact Information</h4>
            <ul class="list-unstyled m-0">
              <li>- mail: xx@gmail.com</li>
              <li>
                - Address: 758 Lorem ipsum dolor sit amet consectetur.
              </li>
              <li>- Phone: +01091475936</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection