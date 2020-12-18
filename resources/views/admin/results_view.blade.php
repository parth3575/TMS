@extends('admin.base_admin')
@section('title', 'Results')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div>
                        <h4 class="card-title"> Results</h4>
                </div>
              </div>



              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                        <th>User Id</th>
                        <th>User Name</th>
                        <th>Enrollment No.</th>
                        <th>Subject</th>
                        <th>Marks</th>
                        <th>Time</th>
                    </thead>
                    <tbody>
                        @foreach($result as $r)
                          <tr>
                            <td>{{$r->user_id}}</td>
                            <td>{{$r->user_name}}</td>
                            <td>{{$r->enrollment_no}}</td>
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
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
