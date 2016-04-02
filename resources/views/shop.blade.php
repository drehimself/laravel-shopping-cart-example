@extends('master')

@section('content')

    <div class="container">
        <div class="jumbotron text-center clearfix">
            <h2>Laravel Shopping Cart Example</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti autem doloribus provident repudiandae fuga voluptates ab quod cumque ad saepe, blanditiis officiis dolor unde porro magni, quasi nobis labore. Nobis.</p>
            <p>
                <a href="#" class="btn btn-primary btn-lg" target="_blank">Blog Post</a>
                <a href="#" class="btn btn-success btn-lg" target="_blank">GitHub Repo</a>
            </p>


        </div> <!-- end jumbotron -->
        <div class="row">
            <div class="col-md-3">
                <div class="thumbnail">

                    <div class="caption text-center">
                        <a href="/product"><img src="{{ asset('img/ps4.jpg') }}" alt="product" class="img-responsive"></a>
                        <a href="/product"><h3>Playstation 4</h3>
                        <p>$399.99</p>
                        </a>
                    </div> <!-- end caption -->

                </div> <!-- end thumbnail -->
            </div> <!-- end col-md-3 -->

            <div class="col-md-3">
                <div class="thumbnail">

                    <div class="caption text-center">
                        <a href="/product"><img src="{{ asset('img/xbox-one.jpg') }}" alt="product" class="img-responsive"></a>
                        <a href="/product"><h3>XBox One</h3>
                        <p>$399.99</p>
                        </a>
                    </div> <!-- end caption -->

                </div> <!-- end thumbnail -->
            </div> <!-- end col-md-3 -->

            <div class="col-md-3">
                <div class="thumbnail">

                    <div class="caption text-center">
                        <a href="/product"><img src="{{ asset('img/macbook-pro.jpg') }}" alt="product" class="img-responsive"></a>
                        <a href="/product"><h3>Apple Macbook Pro</h3>
                        <p>$399.99</p>
                        </a>
                    </div> <!-- end caption -->

                </div> <!-- end thumbnail -->
            </div> <!-- end col-md-3 -->

            <div class="col-md-3">
                <div class="thumbnail">

                    <div class="caption text-center">
                        <a href="/product"><img src="{{ asset('img/ipad-retina.jpg') }}" alt="product" class="img-responsive"></a>
                        <a href="/product"><h3>Apple iPad Retina</h3>
                        <p>$399.99</p>
                        </a>
                    </div> <!-- end caption -->

                </div> <!-- end thumbnail -->
            </div> <!-- end col-md-3 -->

        </div> <!-- end row -->

        <div class="row">
            <div class="col-md-3">
                <div class="thumbnail">

                    <div class="caption text-center">
                        <a href="/product"><img src="{{ asset('img/acoustic.jpg') }}" alt="product" class="img-responsive"></a>
                        <a href="/product"><h3>Acoustic Guitar</h3>
                        <p>$399.99</p>
                        </a>
                    </div> <!-- end caption -->

                </div> <!-- end thumbnail -->
            </div> <!-- end col-md-3 -->

            <div class="col-md-3">
                <div class="thumbnail">

                    <div class="caption text-center">
                        <a href="/product"><img src="{{ asset('img/electric.jpg') }}" alt="product" class="img-responsive"></a>
                        <a href="/product"><h3>Electric Guitar</h3>
                        <p>$399.99</p>
                        </a>
                    </div> <!-- end caption -->

                </div> <!-- end thumbnail -->
            </div> <!-- end col-md-3 -->

            <div class="col-md-3">
                <div class="thumbnail">

                    <div class="caption text-center">
                        <a href="/product"><img src="{{ asset('img/headphones.jpg') }}" alt="product" class="img-responsive"></a>
                        <a href="/product"><h3>Headphones</h3>
                        <p>$399.99</p>
                        </a>
                    </div> <!-- end caption -->

                </div> <!-- end thumbnail -->
            </div> <!-- end col-md-3 -->

            <div class="col-md-3">
                <div class="thumbnail">

                    <div class="caption text-center">
                        <a href="/product"><img src="{{ asset('img/speakers.jpg') }}" alt="product" class="img-responsive"></a>
                        <a href="/product"><h3>Speakers</h3>
                        <p>$399.99</p>
                        </a>
                    </div> <!-- end caption -->

                </div> <!-- end thumbnail -->
            </div> <!-- end col-md-3 -->

        </div> <!-- end row -->
    </div> <!-- end container -->

@endsection