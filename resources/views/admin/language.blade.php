@extends('admin.base_admin')

@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title"> Subjects</h4>
                        @if(session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('status')}}
                        </div>
                        @endif
                    </div>

                    <div class="col">
                        <a href="./add_lang" class="btn btn-primary"><i class="fas fa-plus"> Add Subjects</i></a>
                        {{-- <a href="./add_lang">
                            <i class="fas fa-plus">Add Language</i> --}}

                    </div>
                </div>




              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Id</th>
                      <th>Lang. Name</th>
                      <th>Image</th>
                      <th class="text-right">Edit</th>
                      <th class="text-right">Delete</th>
                    </thead>
                    <tbody>
                        @foreach($language as $row)
                      <tr>
                      <td>{{ $row->id }}</td>
                      <td>{{ $row->l_name }}</td>
                        <td>{{ $row->lang_logo }}</td>
                        <td class="text-right">
                            {{-- <a href="{{url ('update_language/'.$row->id)}}" class="edit"><i class="fas fa-user-edit" title="Edit"></i></a> --}}
                            <a style="width: 60px;" href="{{url ('update_language/'.$row->id)}}" class="btn btn-success" ><i class="fas fa-user-edit" title="Edit"></i></a>
                        </td>
                        <td class="text-right">
                            <form action="{{url ('lang_delete/'.$row->id)}}"  method="POST">
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
