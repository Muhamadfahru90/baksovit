@extends('layouts.app')

@section('main')
    <div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 380px;">
        @guest
            <h1>Silahkan Lakukan Login</h1>
        @else
            <h1>Selamat Datang Dihalaman Admin</h1>
        @endguest

    </div>
@endsection
