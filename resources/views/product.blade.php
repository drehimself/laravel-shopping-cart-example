@extends('master')

@section('content')

    <div class="container">
        <p><a href="#">Shop</a> / Playstation 4</p>
        <h1>Playstation 4</h1>

        <hr>

        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/ps4.jpg') }}" alt="product" class="img-responsive">
            </div>

            <div class="col-md-8">
                <h3>$399.99</h3>
                <a href="#" class="btn btn-success btn-lg">Add to Cart</a>

                <br><br>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo ipsa minus, delectus incidunt maxime voluptatibus sint odio laborum soluta! Cumque, adipisci commodi. Necessitatibus aliquid animi, unde error eius, enim numquam.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque corporis culpa perspiciatis eum doloribus explicabo laudantium velit porro blanditiis ex pariatur magnam eius, temporibus illo commodi excepturi nihil? Quia molestias aperiam non voluptate, in exercitationem illum, dolores quae cum, nesciunt, quaerat et expedita consectetur dolorem dolore explicabo pariatur voluptatibus!</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad neque impedit quaerat nihil fugiat excepturi unde ratione iste, libero dignissimos fugit beatae fuga praesentium repudiandae corporis, cumque dolore maiores magni quas molestias magnam culpa sint, dolorem aspernatur provident. Sapiente, aspernatur.</p>
            </div> <!-- end col-md-8 -->
        </div> <!-- end row -->

        <div class="row">
            <h3>You may also like...</h3>

            <div class="col-md-3">
                <div class="thumbnail">

                    <div class="caption text-center">
                        <a href="#"><img src="{{ asset('img/ps4.jpg') }}" alt="product" class="img-responsive"></a>
                        <a href="#"><h3>Playstation 4</h3>
                        <p>$399.99</p>
                        </a>
                    </div> <!-- end caption -->

                </div> <!-- end thumbnail -->
            </div> <!-- end col-md-3 -->

            <div class="col-md-3">
                <div class="thumbnail">

                    <div class="caption text-center">
                        <a href="#"><img src="{{ asset('img/xbox-one.jpg') }}" alt="product" class="img-responsive"></a>
                        <a href="#"><h3>XBox One</h3>
                        <p>$399.99</p>
                        </a>
                    </div> <!-- end caption -->

                </div> <!-- end thumbnail -->
            </div> <!-- end col-md-3 -->

            <div class="col-md-3">
                <div class="thumbnail">

                    <div class="caption text-center">
                        <a href="#"><img src="{{ asset('img/macbook-pro.jpg') }}" alt="product" class="img-responsive"></a>
                        <a href="#"><h3>Apple Macbook Pro</h3>
                        <p>$399.99</p>
                        </a>
                    </div> <!-- end caption -->

                </div> <!-- end thumbnail -->
            </div> <!-- end col-md-3 -->

            <div class="col-md-3">
                <div class="thumbnail">

                    <div class="caption text-center">
                        <a href="#"><img src="{{ asset('img/ipad-retina.jpg') }}" alt="product" class="img-responsive"></a>
                        <a href="#"><h3>Apple iPad Retina</h3>
                        <p>$399.99</p>
                        </a>
                    </div> <!-- end caption -->

                </div> <!-- end thumbnail -->
            </div> <!-- end col-md-3 -->

        </div> <!-- end row -->

        <div class="spacer"></div>


    </div> <!-- end container -->

@endsection