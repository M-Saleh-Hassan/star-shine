@extends('layouts.page-header')

@section('title', 'About Us')
@section('pageTitle', 'About Us')

@section('pageContent')

  <section class="about-page py-5">
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