@extends('admin.base_admin')

@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title"> Users</h4>

                        @if(session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('status')}}
                        </div>
                        @endif

                    </div>

                    <div class="col">
                        <a href="./add_user" class="btn btn-primary"><i class="fas fa-plus"> Add User</i></a>
                        {{-- <a href="./add_lang">
                            <i class="fas fa-plus">Add Language</i> --}}

                    </div>
                </div>






              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Is Admin</th>
                      <th>Enrollment No</th>
                      <th>Roll No</th>
                      <th>Gender</th>
                      <th>Date of Birth</th>
                      <th>Contact No.</th>
                      <th class="text-right">Edit</th>
                      <th class="text-right">Delete</th>
                    </thead>
                    <tbody>
                        @foreach($users as $row)
                      <tr>
                      <td>{{ $row->fname }}</td>
                        <td>{{ $row->mname }}</td>
                        <td>{{ $row->lname }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->usertype }}</td>
                        <td>{{ $row->enrollment_no }}</td>
                        <td>{{ $row->roll_no }}</td>
                        <td>{{ $row->gender }}</td>
                        <td>{{ $row->dob }}</td>
                        <td>{{ $row->contact_no }}</td>
                        <td class="text-right">
                            <a style="width: 60px;" href="{{url ('update_user/'.$row->id)}}" class="btn btn-success" ><i class="fas fa-user-edit" title="Edit"></i></a>
                        </td>
                        <td class="text-right">
                            <form action="{{url ('user_delete/'.$row->id)}}"  method="POST">
                                @csrf
                                {{method_field('DELETE')}}
                                <button  type="submit" class="btn btn-danger" style="width: 60px;" ><i class="fa fa-times fa-lg" aria-hidden="true" title="Delete"></i></button>
                            </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
