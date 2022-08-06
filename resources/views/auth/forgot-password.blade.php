@extends('layouts.app')

@section('main')
    <div class="mt-5 mx-auto" style="width: 380px">
        <div class="card">


            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-succes">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ Route('password.email') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="" class="form-label">E-mail</label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Send Reset Link</button>
                </form>
            </div>
        </div>
    </div>
@endsection
