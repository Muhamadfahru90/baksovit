@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">


        <div class="card-body">
            <form action="{{url('/task')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">User</label>
                    <input type="text" class="form-control" name="user" value="{{ old('user') }}">
                    @error('user')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Task</label>
                    <textarea name="task" class="form-control" id="" rows="3">{{ old('task') }}</textarea>
                    @error('task')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection