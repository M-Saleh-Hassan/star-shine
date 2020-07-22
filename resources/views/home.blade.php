@extends('layouts.app')

@section('title', 'Home')

@section('pageContent')

  <section class="slider">
    <div id="carouselFade" data-pause="false" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url( https://i.ibb.co/71LR77z/DSC-1287-min.jpg );"> </div>

        <div class="carousel-item" style="background-image: url( https://serving.photos.photobox.com/71655041f0efb2ef0b680be8ec3fc0db5f878458fc5036afbafd4430c0ec670d6ca4d3f3.jpg );"> </div>

        <div class="carousel-item" style="background-image: url( https://i.ibb.co/KGSKj0t/DSC-1261-min.jpg );"> </div>

        <div class="carousel-item" style="background-image: url( {{asset('/images/DSC_1268-min.jpg')}} );"> </div>
      </div>

      <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </section>

  <div class="sponsors">
    <div class="owl-carousel owl-sponsors">
      <div>
        <img loading="lazy" src="{{asset('/images/47-min.png')}}" alt="">
      </div>
      <div>
        <img loading="lazy" src="{{asset('/images/54-min.png')}}" alt="">
      </div>
      <div>
        <img loading="lazy" src="{{asset('/images/64-min.png')}}" alt="">
      </div>
      <div>
        <img loading="lazy" src="{{asset('/images/125-min.png')}}" alt="">
      </div>
      <div>
        <img loading="lazy" src="{{asset('/images/315-min.png')}}" alt="">
      </div>
      <div>
        <img loading="lazy" src="{{asset('/images/215-min.png')}}" alt="">
      </div>
    </div>
  </div>

  <section class="about-us">
    <div class="container">
      <h2 class="sec-heading">Why Choose Us</h2>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="adv">
            <div class='img'>
              <img loading="lazy" src="https://svgur.com/i/Mgp.svg" alt="">
            </div>
            <div class="caption">
              <h5>Comfortable transportation</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor assumenda quia soluta.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="adv">
            <div class='img'>
              <img loading="lazy" src="{{asset('/images/support.svg')}}" alt="">
            </div>
            <div class="caption">
              <h5>Support Team</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor assumenda quia soluta.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="adv">
            <div class='img'>
              <img loading="lazy" src="{{asset('/images/heart.svg')}}" alt="">
            </div>
            <div class="caption">
              <h5>Passionate Travel</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor assumenda quia soluta.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="gallery">
    <div class="container">
    <h2 class="sec-heading">Featured Images</h2>
      <div class="row">
        <div class="col-md-6 px-2">
          <div class="images first">
            <div class="full-w-img">
              <div class="img-container">
                <img loading="lazy" src="https://serving.photos.photobox.com/484210358d105496ca2788a9a61c900648c4aa5c8d59cc4c663621cd7da4aebfe503fdec.jpg" class="img-fluid w-100" alt="">
              </div>
            </div>
            <div class="two-imgs mb-3">
              <div class="img-container">
                <img loading="lazy" src="https://serving.photos.photobox.com/17257934a1f2c12c94cdadb14cf221b32049a0634e65de9e7652404697c9cc7f855f93d9.jpg" class="img-fluid" alt="">
              </div>
              <div class="img-container">
                <img loading="lazy" src="https://serving.photos.photobox.com/466214861cf97611f5e0b81b35d5b2baef2c5aac482ebab6d79944df5a67e9d13684e455.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 px-2">
          <div class="images last">
            <div class="two-imgs">
              <div class="img-container">
                <img loading="lazy" src="https://serving.photos.photobox.com/85604215a2f039564a7d413c9236f0afab08a8d2410cbd65e1374c0f26d4ec2052b17c3c.jpg" class="img-fluid" alt="">
              </div>
              <div class="img-container">
                <img loading="lazy" src="https://serving.photos.photobox.com/7427260647140ae17ea36be6c8db0f57c7915720e6726682b5c8fda14b7df788ac43bc94.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <div class="full-w-img">
              <div class="img-container">
                <img loading="lazy" src="https://i.ibb.co/mBgNCDn/DSC-1261-min.jpg" class="img-fluid w-100" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center my-3">
        <a href="#" class="all-btn">Go to Gallery</a>
      </div>
    </div>
  </section>

  <section class="our-work">
    <div class="container">
      <h2 class="sec-heading">Our Latest Projects </h2>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="project flip-card">
            <div class="inner">
              <div class="front">
                <img loading="lazy" src="https://serving.photos.photobox.com/17257934a1f2c12c94cdadb14cf221b32049a0634e65de9e7652404697c9cc7f855f93d9.jpg" class="img-fluid" alt="">
              </div>
              <div class="back">
                <h4>Dummy Title</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique ad doloribus, nesciunt omnis in recusandae dolorum. Nostrum iste praesentium minima?</p>
                <!-- Launch Modal Button -->
                <button class="more-btn" data-toggle="modal" data-target="#project_modal_1">Read More</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="project flip-card">
            <div class="inner">
              <div class="front">
                <img loading="lazy" src="https://i.ibb.co/3hLctCH/DSC-1250-min.jpg" class="img-fluid" alt="">
              </div>
              <div class="back">
                <h4>Dummy Title</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique ad doloribus, nesciunt omnis in recusandae dolorum. Nostrum iste praesentium minima?</p>
                <!-- Launch Modal Button -->
                <button class="more-btn" data-toggle="modal" data-target="#project_modal_2">Read More</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="project flip-card">
            <div class="inner">
              <div class="front">
                <img loading="lazy" src="https://i.ibb.co/zGrcrSk/DSC-1257-min.jpg" class="img-fluid" alt="">
              </div>
              <div class="back">
                <h4>Dummy Title</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique ad doloribus, nesciunt omnis in recusandae dolorum. Nostrum iste praesentium minima?</p>
                <!-- Launch Modal Button -->
                <button class="more-btn" data-toggle="modal" data-target="#project_modal_3">Read More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center my-3">
        <a href="#" class="all-btn">View All</a>
      </div>
    </div>


    <!-- MODALS -->

    <!-- Modal -->
    <div class="modal fade" id="project_modal_1" tabindex="-1" role="dialog" aria-labelledby="project_modal_1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h3>Project Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit voluptatem harum minus minima officiis exercitationem numquam quam incidunt, rem similique nostrum unde odit nobis quo impedit fugit nulla facere, porro iure autem praesentium voluptas corrupti sequi. Beatae voluptatem molestias, laboriosam rem quidem omnis illo ex necessitatibus eum accusantium quod culpa quam autem quasi? Incidunt, dignissimos. Perferendis quisquam, facilis dolor praesentium amet natus in porro voluptatum. Doloremque, tempora, iusto earum deserunt corrupti, in laborum eaque ipsa repellat fuga voluptatem harum accusantium.</p>
            <div class="row">
              <div class="col-lg-4 col-md-6">
                  <div class="img-container">
                      <img class="img-fluid" src="https://via.placeholder.com/350.png/bbb/fff">
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="img-container">
                      <img class="img-fluid" src="https://via.placeholder.com/350.png/bbb/fff">
                  </div>
              </div>
            </div>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="project_modal_2" tabindex="-1" role="dialog" aria-labelledby="project_modal_2" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <img loading="lazy" src="https://i.ibb.co/3hLctCH/DSC-1250-min.jpg" class="img-fluid" alt="">
            <h3>Project Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit voluptatem harum minus minima officiis exercitationem numquam quam incidunt, rem similique nostrum unde odit nobis quo impedit fugit nulla facere, porro iure autem praesentium voluptas corrupti sequi. Beatae voluptatem molestias, laboriosam rem quidem omnis illo ex necessitatibus eum accusantium quod culpa quam autem quasi? Incidunt, dignissimos. Perferendis quisquam, facilis dolor praesentium amet natus in porro voluptatum. Doloremque, tempora, iusto earum deserunt corrupti, in laborum eaque ipsa repellat fuga voluptatem harum accusantium.</p>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="project_modal_3" tabindex="-1" role="dialog" aria-labelledby="project_modal_3" aria-hidden="true">
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

  </section>

  <!-- <section class="tiny-slider py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Lorem Title Here</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae optio qui excepturi voluptas assumenda! Dolorem facilis culpa, exercitationem rerum laboriosam nam. Enim deserunt dolor sunt asperiores quia perferendis nam totam delectus temporibus mollitia recusandae at, quas maiores vero officiis, facere quos! Laudantium minus quia perferendis enim, quo laborum cupiditate voluptate?</p>
        </div>
        <div class="col-md-6">
          <div class="circle-slider">



          <div class="slider-wrapper">

            <div class="rotatescroll" id="rotatescroll">

              <div class="viewport">

                <ul class="overview">
                  <li>
                    <a href="http://www.baijs.com"><img loading="lazy" src="https://lh3.googleusercontent.com/-qYs3ZOJX-xg/VcoW14eR7uI/AAAAAAAADII/yAy7HLAr-ds/s800-Ic42/Southend-on-Sea-England_350x350.jpg" alt="" /></a>
                  </li>
                  <li>
                    <a href="http://www.baijs.com"><img loading="lazy" src="https://lh3.googleusercontent.com/-vZR6Rjpv3Uw/VcoW01PFRiI/AAAAAAAADII/F4N3YtK0mTA/s800-Ic42/Kylemore_County-Galway_Ireland_350x350.jpg" alt="" /></a>
                  </li>
                  <li>
                    <a href="http://www.baijs.com"><img loading="lazy" src="https://lh3.googleusercontent.com/-6twGYRW9qec/VcoW1E5Fj2I/AAAAAAAADII/xzsBLnCTuIs/s800-Ic42/Kidwelly-Carmarthen-Wales_350x350.jpg" alt="" /></a>
                  </li>
                  <li>
                    <a href="http://www.baijs.com"><img loading="lazy" src="https://lh3.googleusercontent.com/-TFeJJDYwyYw/VcoW1ATUTyI/AAAAAAAADII/GHVafrqce-c/s800-Ic42/Guernsey-coast-at-Gouffre_Channel-Islands_350x350.jpg" alt="" /></a>
                  </li>
                  <li>
                    <a href="http://www.baijs.com"><img loading="lazy" src="https://lh3.googleusercontent.com/-87WIsl0qnqE/VcoW2euL1PI/AAAAAAAADII/FFnVShlNvCY/s800-Ic42/Vest-Agder_Lindesnes_350x350.jpg" alt="" /></a>
                  </li>
                  <li>
                    <a href="http://www.baijs.com"><img loading="lazy" src="https://lh3.googleusercontent.com/-rcW7QNlhexM/VcoW1E9f5qI/AAAAAAAADII/zDpGAwGUuoE/s800-Ic42/Prins-Hendrikkade-Amsterdam-Holland_350x350.jpg" alt="" /></a>
                  </li>
                  <li>
                    <a href="http://www.baijs.com"><img loading="lazy" src="https://lh3.googleusercontent.com/-MF0cIdb1OtY/VcoW23sXmHI/AAAAAAAADII/MFHcCy-vSOI/s800-Ic42/bridges-Meuse-Sambre-Namur-Belgium_350x350.jpg" alt="" /></a>
                  </li>
                  <li>
                    <a href="http://www.baijs.com"><img loading="lazy" src="https://lh3.googleusercontent.com/-iamZ6JKpjJI/VcoW1SfQxyI/AAAAAAAADII/zTQU2uKVY6w/s800-Ic42/Sorrento-Naples-Italy_350x350.jpg" alt="" /></a>
                  </li>
                </ul>

              </div>

              <div class="dot"></div>
              <div class="overlay overlay-interaction" id="overlayInteraction"></div>
              <div class="overlay overlay-static"></div>
              <div class="overlay overlay-active" id="overlayActive"></div>
              <div class="thumb"></div>

            </div>
            </div>



          </div>
        </div>
      </div>
    </div>
  </section> -->

  <section class="services">
    <div class="container">
      <h2 class="sec-heading">Our Services</h2>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service">
            <div class="head">
              <span>
                <i class="fas fa-bus-alt"></i>
              </span>
              <h4>Service Name</h4>
            </div>
            <div class="body">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae fuga voluptate totam explicabo deserunt quisquam reprehenderit corporis, quidem deleniti magni.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service">
            <div class="head">
              <span>
                <i class="fas fa-cogs"></i>
              </span>
              <h4>Service Name</h4>
            </div>
            <div class="body">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae fuga voluptate totam explicabo deserunt quisquam reprehenderit corporis, quidem deleniti magni.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service">
            <div class="head">
              <span>
                <i class="fas fa-globe-africa"></i>
              </span>
              <h4>Service Name</h4>
            </div>
            <div class="body">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae fuga voluptate totam explicabo deserunt quisquam reprehenderit corporis, quidem deleniti magni.
              </p>
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


<!--
  <i class="fas fa-bus-alt"></i>
  <i class="fas fa-cogs"></i>
  <i class="fas fa-globe-africa"></i>
  <i class="fas fa-universal-access"></i>
 -->
