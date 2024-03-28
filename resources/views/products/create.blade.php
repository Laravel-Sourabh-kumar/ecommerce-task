@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card mb-3">
    <div class="card-body">
    <div class="row">
            <div class="col-lg-6">
                 <h1>Create Product</h1>

            </div>
            <div class="col-lg-6">
                <p class="float-right">
                    <a href="{{ route('products.index') }}" class="btn btn-info">Back</a>
                </p>
            </div>
        </div>
   
    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <div class="mb-2">
            <label class="form-group" for="name">Name:</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>

        <div class="mb-2">
            <label  class="form-group" for="detail">Detail:</label>
            <textarea   class="form-control" name="detail" id="detail" required>{{ old('detail') }}</textarea>
        </div>

        <div class="mb-2">
            <label  class="form-group"  for="price">Price:</label>
            <input  class="form-control" type="number" name="price" id="price" value="{{ old('price') }}" step="0.01" required>
        </div>
        <div class="mb-2">
            <label  class="form-group"  for="offer_price">Offer Price:</label>
            <input  class="form-control" type="number" name="offer_price" id="offer_price" value="{{ old('price') }}" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
</div>
</div>
@endsection