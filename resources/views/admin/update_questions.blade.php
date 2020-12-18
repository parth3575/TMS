@extends('admin.base_admin')

@section('content')
<div class="signup-form">
    <form action="{{url('update_que_done/'.$que->id)}}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <h1 class="text-center">Update Questions</h1>
        <hr>

        <div class="form-group">
            <label for="question">Question*</label>
            <input id="question" type="text" class="form-control @error('question') is-invalid @enderror" name="question"  value="{{ $que->question }}" required autocomplete="question" autofocus>
            {{-- <textarea id="question" class="form-control @error('question') is-invalid @enderror" name="question"  value="{{ $que->question }}" required autofocus></textarea> --}}
            @error('question')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="o1">Option 1*</label>
            <input id="o1" type="text" class="form-control @error('o1') is-invalid @enderror" name="o1"  value="{{ $que->o1 }}" required autocomplete="o1" autofocus>
            @error('o1')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="o2">Option 2*</label>
            <input id="o2" type="text" class="form-control @error('o2') is-invalid @enderror" name="o2"  value="{{ $que->o2 }}" required autocomplete="o2" autofocus>
            @error('o2')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="o3">Option 3*</label>
            <input id="o3" type="text" class="form-control @error('o3') is-invalid @enderror" name="o3"  value="{{ $que->o3 }}" required autocomplete="o3" autofocus>
            @error('o3')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="o4">Option 4*</label>
            <input id="o4" type="text" class="form-control @error('o4') is-invalid @enderror" name="o4"  value="{{ $que->o4 }}" required autocomplete="o4" autofocus>
            @error('o4')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="correct_ans">Correct Answer*</label>
            <input id="correct_ans" type="text" class="form-control @error('correct_ans') is-invalid @enderror" name="correct_ans"  value="{{ $que->correct_ans }}" required autocomplete="correct_ans" autofocus>
            @error('correct_ans')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="lang_id">Language id*</label>
            <input id="lang_id" type="number" class="form-control @error('lang_id') is-invalid @enderror" name="lang_id"  value="{{ $que->lang_id }}" required autocomplete="lang_id" autofocus>
            @error('lang_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
</div>

@endsection
