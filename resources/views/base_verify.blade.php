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

    <title></title>
  </head>
  <body>
    @section('header')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <a class="navbar-brand bg-light " href="#"><img src={{asset('images/logo.ico')}} alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>



        @if (!Auth::guest())
    <div class="form-inline my-2 my-lg-0">
        <div class="bg-dark-gray text-white mr-2"> Logged in as {{Auth::user()->fname}}</div>
        <a href="{{ URL::to('logout') }}">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Logout</button>
        </a>
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

<script src="{{asset('js/slim.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/browser.min.js')}}"></script>
<script src="{{asset('js/breakpoints.min.js')}}"></script>
<script src="{{asset('js/util.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>




