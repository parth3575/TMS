@extends('base')
@section('title', 'Tests')
@section('content')
{{-- <script type="text/javascript">
    $(document).ready(function() {
        alert("Welcome, this is your test list");
    });
</script> --}}
<div class="highlights">

    @if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('status')}}
    </div>
    @endif

    @foreach($test as $row)
    <section>
        <div class="content">
            <header>
                <a href="{{url ('mcqs/'.$row->id)}}" ><img style="max-width:240px;max-height:240px;" src = {{ asset('/lang_logos/'.$row->lang_logo) }}></a>
                {{-- <a href="{{url ('mcqs/'.$row->id)}}" ><img style="max-width:240px;max-height:240px;" src = {{ $row->lang_logo }} ></a> --}}
                <strong><h3>{{ $row->l_name }}</h3></strong>
            </header>
        </div>
    </section>
    @endforeach

</div>

{{-- ------------------------------------------------------------------------------------ --}}
{{-- <div class="highlights">
    <section>
        <div class="content">
            <header>
                <a href="#" ><img src ={{asset('images/c_240.png')}} ></a>
                <strong><h3>C Language</h3></strong>
            </header>
<!--            <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>-->
        </div>
    </section>
    <section>
        <div class="content">
            <header>
            <a href="{{url ("mcqs")}}" ><img src ={{asset('images/php.png')}} ></a>
                <h3>PHP</h3>
            </header>
<!--            <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>-->
        </div>
    </section>
    <section>
        <div class="content">
            <header>
                <a href="#" ><img src ={{asset('images/python.png')}} ></a>
                <h3>PYTHON</h3>
            </header>
<!--            <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>-->
        </div>
    </section>
    <section>
        <div class="content">
            <header>
                <a href="#" ><img src ={{asset('images/java.png')}} ></a>
                <h3>JAVA</h3>
            </header>
<!--            <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>-->
        </div>
    </section>
    <section>
        <div class="content">
            <header>
                <a href="#" ><img src ={{asset('images/html.png')}} ></a>
                <h3>HTML</h3>
            </header>
<!--            <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>-->
        </div>
    </section>
    <section>
        <div class="content">
            <header>
                <a href="#" ><img src ={{asset('images/sql.png')}} ></a>
                <h3>SQL</h3>
            </header>
<!--            <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>-->
        </div>
    </section>

    <section>
        <div class="content">
            <header>
                <a href="#" ><img src ={{asset('images/aptitude.png')}} ></a>
                <h3>APTITUDE</h3>
            </header>
<!--            <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>-->
        </div>
    </section>

    <section>
        <div class="content">
            <header>
                <a href="#" ><img src ={{asset('images/android.png')}} ></a>
                <h3>ANDROID</h3>
            </header>
<!--            <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>-->
        </div>
    </section>
    <section>
        <div class="content">
            <header>
                <a href="#" ><img src ={{asset('images/asp.png')}} ></a>
                <h3>ASP .NET</h3>
            </header>
<!--            <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>-->
        </div>
    </section>
    <section>
        <div class="content">
            <header>
                <a href="#" ><img src ={{asset('images/js.png')}} ></a>
                <h3>JAVASCRIPT</h3>
            </header>
<!--            <p>Nunc lacinia ante nunc ac lobortis ipsum. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus.</p>-->
        </div>
    </section>
</div> --}}
@endsection
