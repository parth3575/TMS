<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href={{asset('css/bootstrap.min.css')}} />
    <link rel="stylesheet" type="text/css" href={{asset('css/custom.css')}} />
    <link rel="stylesheet" type="text/css" href={{asset('css/main.css')}} />
    {{-- <link rel="stylesheet" type="text/css" href={{asset('css/quiz.css')}} /> --}}
    <!-- js -->
    <script src="{{asset('js/slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/browser.min.js')}}"></script>
    <script src="{{asset('js/breakpoints.min.js')}}"></script>
    <script src="{{asset('js/util.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    {{-- <script src="{{asset('js/quiz.js')}}"></script> --}}
    {{-- js for quiz --}}
    {{-- <script type="text/javascript">
        $(document).ready(function() {
           $('label').click(function() {
               $('label').removeClass('worngans');
               $(this).addClass('worngans');
           });
       });
       </script> --}}

    <title>@yield('title')</title>
  </head>
  <body>
    @section('header')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <a class="navbar-brand bg-light " href="{{ url("/") }}"><img src={{asset('images/logo.ico')}} alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url("/") }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url("tests") }}">Tests</a>
              </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url("contact") }}">Contact Us</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit">Search</button>
          </form>
        </div>

        @if (!Auth::guest())
    <div class="form-inline my-2 my-lg-0">
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="bg-dark-gray text-white mr-2"> {{ Auth::user()->fname }}</div>
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url("profile") }}">Profile</a>
                <a class="dropdown-item" href="{{ url("results") }}">Results</a>
                <a class="dropdown-item" href="{{ URL::to('logout') }}">Logout</a>
            </div>
        </li>


        {{-- <a href="{{ URL::to('logout') }}">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Logout</button>
        </a> --}}
    </div>

    @else
    <a href="{{ url("login") }}">
        <button type="button" class="btn btn btn-outline-success">Login</button>
    </a>

    @endif
      </nav>
  </div>
  @show
@section('content')



@show
@section('footer')
<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <div class="content">
            <section id="enlighten_info-2" class="widget widget_enlighten_info">
                <div class="footer_info_wrap">
                    <div class="footer_widget_title">
                        <h4>Contact Us</h4>
                        <div class="faq_dot"></div>
                    </div>
                    <div class="info_wrap">
                        <div class="location_info">
                            <span class="fa_icon_info"><i class="fa fa-map-marker" aria-hidden="true"></i></span><br>
                            <span class="location">Chimanbhai Patel Institute Campus, Opp. Karnavati Club, Next to Shapath IV, S.G. Raod,, Sarkhej - Gandhinagar Hwy, Prahlad Nagar, Ahmedabad, Gujarat 380015</span>
                        </div>
                        <div class="phone_info">
                            <span class="fa_icon_info"><i class="fa fa-phone" aria-hidden="true"></i></span><br>
                            <span class="phone"> 079-26926568</span>
                        </div>
                        <div class="email_info">
                            <span class="fa_icon_info"><i class="fa fa-envelope-o" aria-hidden="true"></i></span><br>
                            <span class="email">info@cpi.edu.in</span>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <h4>FOLLOW US</h4>
                <ul class="plain">
                    <li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
                    <li><a href="https://www.facebook.com/chimanbhaipatelinstitute"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
                    <li><a href="https://www.instagram.com/cpi.edu.in/"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
                    <li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
                    <li><a href="https://www.youtube.com/watch?v=FLTkkmEOO_Y&feature=youtu.be"><i class="icon fa-youtube">&nbsp;</i>Youtube</a></li>
                </ul>
            </section>


            <div class="footer_area_one">
                    <div class="textwidget ">
                        <iframe src="https://maps.google.co.in/maps?ie=UTF8&amp;fb=1&amp;gl=in&amp;cid=14842750103601996989&amp;q=Chimanbhai+Patel+Institute&amp;hq=&amp;hnear=&amp;ll=23.016793,72.505015&amp;spn=0.006295,0.006295&amp;t=h&amp;iwloc=A&amp;output=embed" marginwidth="0" marginheight="0" scrolling="no" width="350" height="250" frameborder="0"></iframe>
                    </div>
            </div>

        </div>
        <div class="copyright">
            &copy; 2018 Chimanbhai Patel Institute. All Rights Reserved.
        </div>
    </div>
</footer>
@show


</body>
</html>




