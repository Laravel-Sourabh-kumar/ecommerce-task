@extends('layouts.app')

@section('content')


    <div class="container mt-5">
    <div class="card mb-3">
        <div class="card-body">
        <div class="row">
            <div class="col-lg-6">
                <h1>Products</h1>
            </div>
            <div class="col-lg-6">
                <p class="float-right">
                    <a href="{{ route('products.create') }}"><i class="fa fa-plus"></i></a>
                </p>
            </div>
        </div>
        </div>
    </div>
    <table  id="example" class="table table-bordered mb-5 ">
        <thead>
            <tr class="table-success">
            <th scope="col">#</th>
                <th  scope="col">Name</th>
                <th  scope="col">Detail</th>
                <th  scope="col">Price</th>
                <th  scope="col">Offer Price</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                <th scope="row">{{ $product->id }}</th>
                       
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->detail }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->offer_price }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-info"> <i class="fa fa-edit"></i></a>

                        <form method="POST" class="mt-2" action="{{ route('products.destroy', $product) }}">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection