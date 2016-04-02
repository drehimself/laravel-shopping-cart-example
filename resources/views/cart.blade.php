@extends('master')

@section('content')

    <div class="container">
        <p><a href="#">Home</a> / Cart</p>
        <h1>Your Cart</h1>

        <hr>

        <table class="table">
            <thead>
                <tr>
                    <th class="table-image"></th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th class="column-spacer"></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="table-image"><a href="/product"><img src="{{ asset('img/ps4.jpg') }}" alt="product" class="img-responsive cart-image"></a></td>
                    <td><a href="/product" class="">Playstation 4</a></td>
                    <td>1</td>
                    <td>$299.99</td>
                    <td class=""></td>
                    <td><a href="#">Remove</a></td>
                </tr>

                <tr>
                    <td class="table-image"><a href="/product"><img src="{{ asset('img/xbox-one.jpg') }}" alt="product" class="img-responsive cart-image"></a></td>
                    <td><a href="/product" class="">Xbox One</a></td>
                    <td>1</td>
                    <td>$399.99</td>
                    <td class=""></td>
                    <td><a href="#">Remove</a></td>
                </tr>

                <tr class="border-bottom">
                    <td class="table-image"></td>
                    <td style="padding: 40px;"></td>
                    <td class="small-caps table-bg" style="text-align: right">Your Total</td>
                    <td class="table-bg">$2,015</td>
                    <td class="column-spacer"></td>
                    <td></td>
                </tr>

            </tbody>
        </table>

        <a href="/" class="btn btn-primary btn-lg">Continue Shopping</a> &nbsp;
        <a href="#" class="btn btn-success btn-lg">Proceed to Checkout</a>

        <div class="spacer"></div>

    </div> <!-- end container -->

@endsection