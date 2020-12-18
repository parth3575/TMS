@extends('admin.base_admin')

@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <center><h4 class="card-title"> <h1>Welcome {{ Auth::user()->fname }}</h1></h4></center>
              </div>

                {{-- <div>
                    {{-- {{$count}} --}}
                    {{-- @foreach($count as $row)
                    {{$row->id}}
                    @endforeach --}}
                    {{-- @foreach($registered as $row)
                    {{$row}}
                    @endforeach --}}
                {{-- </div> --}}
              {{-- <div class="card-body" >
                <div class="highlights" >
                <section>
                    <div class="content">
                        <header>
                            <h3>Total Students</h3>
                            @foreach($registered as $row)
                            {{$row}}
                            @endforeach
                            {{$registered}}
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <h3>PHP</h3>

                        </header>
                    </div>
                </section>
                </div> --}}



                {{-- <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th class="text-right">Actions</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Dakota Rice</td>
                        <td>Niger</td>
                        <td>Oud-Turnhout</td>
                        <td>Oud-Turnhout</td>
                        <td class="text-right">$36,738</td>
                      </tr>
                    </tbody>
                  </table>
                </div> --}}
              {{-- </div> --}}



            </div>
          </div>
        </div>
      </div>
@endsection
