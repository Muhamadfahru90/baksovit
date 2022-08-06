@extends('layouts.app')

@section('main')
    <div style="width: 930px;" class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-white">


        <div class="card">
            @foreach ($data as $isi)
                <div class="card-header"><a class="btn btn-primary" href="{{ url('/product/create') }}">Add Product >></a>
                </div>
                <div class="car-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; ?>

                            <tr>
                                <th scope="row">{{ $id }}</th>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->description }}</td>
                                <td>Rp.{{ number_format($product->price, 2, ',', '.') }}</td>
                                <td style="width: 180px;">
                                    <a class="btn btn-primary" href="">Edit</a>
                                    <a class="btn btn-danger" href="">Delete</a>
                                </td>
                            </tr>
            @endforeach
            </tbody>
            </table>
            <br>

        </div>
    </div>


    </div>
@endsection
