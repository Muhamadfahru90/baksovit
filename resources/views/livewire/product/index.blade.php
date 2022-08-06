<div class="container">
    <div class="row justify-conten-center">
        <div class="co-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="car-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; ?>
                            @foreach ($ptoducts as $product)
                                <?php $no++; ?>
                                <tr>
                                    <th scope="row">{{ $no }}</th>
                                    <td>{{ $product->title }}</td>
                                    <td>Rp.{{ number_format($product->price, 2, ',', '.') }}</td>
                                    <td>
                                        <a class="btn btn-info" href="">Show</a>

                                        <a class="btn btn-primary" href="">Edit</a>
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
