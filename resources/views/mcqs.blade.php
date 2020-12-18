@extends('base')
@section('title', 'Mcqs')
@section('content')
<div class="mcqs-form">
    @foreach($lang as $l)
    <h1>{{$l->l_name}} Test</h1><hr>
    @endforeach
    <div>
        <div class="row">
            <div class="col">
                <p>1. The quiz will be of half an hour duration.<br>
                    2. You can attempt the quiz as many times as you wont.<br>
                    3. There are a total 30 questions.<br>
                    4. Each question carries one mark. No negative marking for wrong answers.<br>
                    5. Questions are of Multiple Choice. </p>
            </div>

            <div class="col">
                <h4 style="color:#FF0000;position:absolute;left:70%;top:30%;" align="center" >
                    <span id="iTimeShow">Time Remaining: </span><br>
                    <span id="timer" style="font-size:20px;">00:30:00</span>
                </h4>
            </div>
        </div>
    </div>

    {{-- <div><button type="submit" id="start_btn"  class="btn btn-primary col-lg-2" >Start Test</button></div><br> --}}
    <div><center><button type="submit" id="start_btn"  class="btn btn-primary col-lg-2" onclick="startTimer();">Start Test</button></center></div><br>


    <form id="mcq_form" name = "mcq_form" >
        <ol>
            @foreach($que as $q)
            <li>
                <h3><b>{{$q->question}}</b></h3>

                <div>
                <input type="radio" name="{{$q->id}}" class="rb" id="question-{{$q->id}}-answers-A" value="{{$q->o1}}" />
                    <label for="question-{{$q->id}}-answers-A">A) {{$q->o1}} </label>
                </div>

                <div>
                    <input type="radio"  name="{{$q->id}}" class="rb" id="question-{{$q->id}}-answers-B" value="{{$q->o2}}" />
                    <label for="question-{{$q->id}}-answers-B">B) {{$q->o2}}</label>
                </div>

                <div>
                    <input type="radio"  name="{{$q->id}}" class="rb" id="question-{{$q->id}}-answers-C" value="{{$q->o3}}" />
                    <label for="question-{{$q->id}}-answers-C">C) {{$q->o3}}</label>
                </div>

                <div>
                    <input type="radio" name="{{$q->id}}" class="rb" id="question-{{$q->id}}-answers-D" value="{{$q->o4}}" />
                    <label for="question-{{$q->id}}-answers-D">D) {{$q->o4}}</label>
                </div>

                <div>
                    <label id = 'correct_ans' class="rb" style="display: none; color: green">{{$q->correct_ans}} </label>
                </div>
                <div>
                    <input type="hidden" id = 'correct_ans1' class="rb" style="display: none; color: green" value="{{$q->correct_ans}}"/>
                </div>

            </li><hr>
            @endforeach
        </ol>
        {{-- <button type="submit" id="but_1" class="btn btn-primary col-lg-2">Submit Test</button> --}}
        <center><button type="submit" id="but_1" class="btn btn-primary col-lg-2" onclick=" stopTimer(); fetchSelected(); " >Submit Test</button></center>
        <center><h1 style="color:#FF0000;" id="marks"></h1></center>
            <hr>
    </form>
</div>

<form method="post" action="/add_marks">
    @csrf
        <input type="hidden" id = 'user' name = "user_id" value="{{ Auth::user()->id }}"/>
        <input type="hidden" id = 'user' name = "user_name" value="{{ Auth::user()->fname }} {{ Auth::user()->mname }} {{ Auth::user()->lname }}"/>
        <input type="hidden" id = 'user' name = "enrollment_no" value="{{ Auth::user()->enrollment_no }}"/>
        <input type="hidden" id = 'marks_submit' name = "marks_submit" value=""/>

        @foreach($lang as $l)
        <input type="hidden" id = 'lang_id' name = "lang_id" value="{{$l->id}}"/>
        <input type="hidden" id = 'lang_name' name = "lang_name" value="{{$l->l_name}}"/>
        @endforeach

<div>
    <button type="button" id="refresh" class="btn btn-primary col-lg-2" >Try again</button>
    <button type="submit" id="finish" class="btn btn-primary col-lg-2" style="position: absolute; right: 0;">Finish</button>
</div>
</form>

@endsection
<!--reference-->
<!--https://www.youtube.com/watch?v=bHnT1apz8u8-->
















{{-- =============================================================================== --}}
{{-- <div class="scp-quizzes-main">
    <div class="scp-quizzes-data">
      <h3>1. What is the output of the below c code?</h3>
        <pre>#include&lt;stdio.h>
    main()
    {
       int x = 5;

       if(x=5)
       {
          if(x=5) printf("Fast");
       }
       printf("learning");
    }</pre>
    <br/>
        <input type="radio" id="Fastlearning" name="question1">
           <label for="Fastlearning">1. Fastlearning</label><br/>
        <input type="radio"  name="question1">
           <label>2. learning</label><br/>
        <input type="radio" name="question1">
           <label>3. learningFast</label> <br/>
        <input type="radio" name="question1">
         <label>4. Fast</label>
     </div> --}}
{{-- ------------------------------------------------------------------ --}}
{{-- <div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10 col-lg-10">
            <div class="border">
                <div class="question bg-white p-3 border-bottom">
                    <div class="d-flex flex-row justify-content-between align-items-center mcq">
                        <h4>MCQ Quiz</h4><span>(5 of 20)</span>
                    </div>
                </div>
                <div class="question bg-white p-3 border-bottom">
                    <div class="d-flex flex-row align-items-center question-title">
                        <h3 class="text-danger">Q.</h3>
                        <h5 class="mt-1 ml-2">Which of the following country has largest population?</h5>
                    </div>
                    <div class="ans ml-2">
                        <label class="radio"> <input type="radio" name="brazil" value="brazil"> <span>Brazil</span>
                        </label>
                    </div>
                    <div class="ans ml-2">
                        <label class="radio"> <input type="radio" name="Germany" value="Germany"> <span>Germany</span>
                        </label>
                    </div>
                    <div class="ans ml-2">
                        <label class="radio"> <input type="radio" name="Indonesia" value="Indonesia"> <span>Indonesia</span>
                        </label>
                    </div>
                    <div class="ans ml-2">
                        <label class="radio"> <input type="radio" name="Russia" value="Russia"> <span>Russia</span>
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white"><button class="btn btn-primary d-flex align-items-center btn-danger" type="button"><i class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;previous</button><button class="btn btn-primary border-success align-items-center btn-success" type="button">Next<i class="fa fa-angle-right ml-2"></i></button></div>
            </div>
        </div>
    </div>
</div><br> --}}

{{-- @endsection --}}
