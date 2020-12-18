@extends('base')
@section('title', 'Results')
@section('content')
<br>
<div class="container">
    <center><h1>Results</h1></center>
<table class="table">
                    <thead class=" text-primary" style="color: red;">
                      <th>Name</th>
                      <th>Subject</th>
                      <th>Marks</th>
                      <th>Time</th>

                    </thead>
                    <tbody>
                    @foreach($result as $r)
                      <tr>
                        <td>{{ Auth::user()->fname }} {{ Auth::user()->mname }} {{ Auth::user()->lname }}</td>
                          <td>{{$r->lang_name}}</td>
                          <td>{{$r->marks}}</td>
                          <td>{{$r->created_at}}</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  <div class="float-right">
                    {{$result->links()}}
                </div><br>
</div>

<br>
@endsection
