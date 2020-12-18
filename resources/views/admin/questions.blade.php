@extends('admin.base_admin')

@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title"> Questions</h4>
                        @if(session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('status')}}
                        </div>
                        @endif
                    </div>

                    <div class="col">
                    <a href="{{url ("add_questions")}}" class="btn btn-primary"><i class="fas fa-plus"> Add Questions</i></a>
                    </div>

                    <div class="col">
                        <a href="{{url ("upload_excel")}}" class="btn btn-primary"> Import Questions</a>
                    </div>
                </div>
              </div>



              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Que. Id</th>
                      <th>Question</th>
                      <th>Option 1</th>
                      <th>Option 2</th>
                      <th>Option 3</th>
                      <th>Option 4</th>
                      <th>Correct Answer</th>
                      <th>Language Id</th>
                      <th class="text-right">Edit</th>
                      <th class="text-right">Delete</th>
                    </thead>
                    <tbody>
                        @foreach($questions as $row)
                      <tr>
                      <td>{{ $row->id }}</td>
                      <td>{{ $row->question }}</td>
                        <td>{{ $row->o1 }}</td>
                        <td>{{ $row->o2 }}</td>
                        <td>{{ $row->o3 }}</td>
                        <td>{{ $row->o4 }}</td>
                        <td>{{ $row->correct_ans }}</td>
                        <td>{{ $row->lang_id }}</td>
                        <td class="text-right">
                            <a style="width: 60px;" href="{{url ('update_questions/'.$row->id)}}" class="btn btn-success" ><i class="fas fa-user-edit" title="Edit"></i></a>
                        </td>
                        <td class="text-right">
                            <form action="{{url ('que_delete/'.$row->id)}}"  method="POST">
                                @csrf
                                {{method_field('DELETE')}}
                                {{-- <a href="#" class="delete" ><i class="fa fa-times" aria-hidden="true" title="Delete"></i></a> --}}
                                <button  type="submit" class="btn btn-danger" style="width: 60px;" ><i class="fa fa-times fa-lg" aria-hidden="true" title="Delete"></i></button>
                            </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="float-right">
                    {{$questions->links()}}
                </div><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
