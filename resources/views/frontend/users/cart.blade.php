@extends('frontend.layouts.app')

@section('content')
<div class="container mt-5">
<table id="cart" class="table table-bordered table-hover table-condensed mt-3">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            
        </tr>
    </thead>
    <tbody>

        <?php $total = 0 ?>

        @if(session('cart'))
        @foreach(session('cart') as $id => $details)

        <?php $total += $details['price'] * $details['quantity'] ?>

        <tr>
            <td data-th="Product">
                <div class="row">
                     
                    <div class="col-sm-9">
                        <p class="nomargin">{{ $details['name'] }}</p>
                        <p class="remove-from-cart btn btn-danger cart-delete" data-id="{{ $id }}" title="Delete">Remove</p>
                    </div>
                </div>
            </td>
            <td data-th="Quantity">
                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
            </td>
            <td data-th="Subtotal" class="text-center"> {{ $details['price'] * $details['quantity'] }}</td>
        </tr>

        @endforeach
        @endif

    </tbody>
    <tfoot>
        @if(!empty($details))
        <tr class="visible-xs">
            <td class="text-right" colspan="2"><strong>Total</strong></td>
            <td class="text-center">  {{ $total }}</td>
        </tr>
        @else
        <tr>
            <td class="text-center" colspan="3">Your Cart is Empty.....</td>
        <tr>
            @endif
    </tfoot>

</table>
<div class="mb-2">
<a href="" class="btn shopping-btn btn-info">Continue Shopping</a>
<a href="" class="btn btn-warning check-btn">Proceed Checkout</a>
</div>
<div class="container products">

    <div class="row">

        @foreach($products as $product)
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card mb-4">
                 <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit(strtolower($product->detail), 50) }}
                    </p>
                    <p class="card-text">
           <strong>Price: </strong> <del>    {{ $product->price }} </del>
          </p>
          <p class="card-text">
           <strong>Offer Price: </strong>    {{ $product->offer_price }} 
          </p><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>
</div>
@endsection