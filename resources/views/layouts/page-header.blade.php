



@extends('layouts.app')

@section('pageHeader')

  <section class="page-title" style="background-image: url( {{asset('/images/50.jpg')}} )">
    <div class="overlay">
      <h2>@yield('pageTitle')</h2>
    </div>
    <div class="path">
      <div class="container">
        <ul>
          <li>
            <a href="#">
              <i class="fas fa-home"></i>
            </a>
            <i class="far fa-hand-point-right"></i>
          </li>
          <li>
            <a href="#">@yield('pageTitle')</a>
          </li>
        </ul>   
      </div>
    </div>
  </section>

@endsection
  