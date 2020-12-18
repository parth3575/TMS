@extends('base')
@section('title', 'Home')
@section('content')
<!--============================-->
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<!--============================-->
    <!-- Banner -->
<section id="banner">
    <div class="inner">
<!--        <h1>Industrious</h1>-->
<!--        <p>A responsive business oriented template with a video background<br />-->
<!--            designed by <a href="https://templated.co/">TEMPLATED</a> and released under the Creative Commons License.</p>-->
    </div>
    <video autoplay loop muted playsinline src="{{asset('images/clg_banner.mp4')}}"></video>
</section>

<!-- Highlights -->
<section class="wrapper">
    <div class="inner">
        <header class="special">
            <h1>
                <i class="fa fa-university" aria-hidden="true"></i>
                <u>WELCOME TO CHIMANBHAI PATEL INSTITUTE</u>
                <i class="fa fa-university" aria-hidden="true"></i>
            </h1>
            {{-- <p>The bow bow layer and clinical undergraduate layer. Felis id enim aliquet. An entire carton layer and a layer of bananas convenience football season carrots airline.</p> --}}
        </header>
        <div class="highlights">
        </div>
    </div>
</section>

<!-- CTA -->
<section id="cta" class="wrapper">
    {{-- <div class="inner">
        <h2>Curabitur ullamcorper ultricies</h2>
        <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing sed feugiat eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida.</p>
    </div> --}}

    <div class="container-fluid px-0">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src={{asset('images/1.png')}} class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <img src={{asset('images/2.png')}} class="d-block w-100" alt="...">

              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <img src={{asset('images/3.png')}} class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>


</section>

<!-- Testimonials -->
{{-- <section class="wrapper">
    <div class="inner">
        <header class="special">
            <h2>Faucibus consequat lorem</h2>
            <p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
        </header>
        <div class="testimonials">
            <section>
                <div class="content">
                    <blockquote>
                        <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                    </blockquote>
                    <div class="author">
                        <div class="image">
                            <img src="{{asset('images/pic01.jpg')}}" alt="" />
                        </div>
                        <p class="credit">- <strong>Jane Doe</strong> <span>CEO - ABC Inc.</span></p>
                    </div>
                </div>
            </section>
            <section>
                <div class="content">
                    <blockquote>
                        <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                    </blockquote>
                    <div class="author">
                        <div class="image">
                            <img src="{{asset('images/pic03.jpg')}}" alt="" />
                        </div>
                        <p class="credit">- <strong>John Doe</strong> <span>CEO - ABC Inc.</span></p>
                    </div>
                </div>
            </section>
            <section>
                <div class="content">
                    <blockquote>
                        <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>
                    </blockquote>
                    <div class="author">
                        <div class="image">
                            <img src="{{asset('images/pic02.jpg')}}" alt="" />
                        </div>
                        <p class="credit">- <strong>Janet Smith</strong> <span>CEO - ABC Inc.</span></p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section> --}}


{{-- <div class="container-fluid px-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src={{asset('images/slider1.jpg')}} class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src={{asset('images/slider2.jfif')}} class="d-block w-100" alt="...">

          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src={{asset('images/slider3.jpeg')}} class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div> --}}
@endsection




