@extends('frontend.layouts.app')
    @section('head')
        <title>Terms Of Use | Image Database</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
    @endsection
    @section('content')
        <section class="inner-banner">
            <div class="container text-center">
                <h3>Projects</h3>
                <div class="breadcumb">
                    <a href="{{ route('pages.index') }}">Home</a><!--
                    --><span class="sep">-</span><!--
                    --><span class="page-name">Projects</span>
                </div><!-- /.breadcumb -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="service-style-one" id="properties-for-sale">
            <div class="container">
                <div class="sec-title">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Our Products</h3>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-6">
                            <p>With years of industry’s experience and knowledge, Image Database Checklist provides the very best advice, guidance and outcome when selling your property.</p>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.sec-title -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service-style-one">

                        <img src="{{ asset('frontend/img/site/product-carpet.jpg') }}" alt="Awesome Image"/>
                            <a href="#"><h3>Carpets</h3></a>
                            <p>Excepteur sint occaecat cupi datat non proi dent, sunt in culpa qui off icia..</p>
                            <div class="hp-icon-boxes">
                                <div class="right-side-box">
                                    <a style="color:#fff ; background:#00546d;" href="mailto:info@huntaproperty.com" class="rqa-btn">Explore More</a>
                                </div>
                            </div><!-- /.icon-box -->
                        <!-- /.content-box -->
                    </div><!-- /.single-service-style-one -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service-style-one">
                            <img src="{{ asset('frontend/img/site/product-wallpaper.jpg') }}" alt="Awesome Image"/>
                            <a href="#"><h3>Wallpapers</h3></a>
                            <p>Excepteur sint occaecat cupi datat non proi dent, sunt in culpa qui off icia..</p>
                        <div class="hp-icon-boxes">
                            <div class="right-side-box">
                                <a style="color:#fff ; background:#00546d;" href="mailto:info@huntaproperty.com" class="rqa-btn">Explore More</a>
                            </div>
                        </div><!-- /.icon-box -->
                    </div><!-- /.single-service-style-one -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-service-style-one">
                            <img src="{{ asset('frontend/img/site/product-fabrics.jpg') }}" alt="Awesome Image"/>
                        <div class="text-box">
                            <a href="#"><h3>Fabrics</h3></a>
                            <p>Excepteur sint occaecat cupi datat non proi dent, sunt in culpa qui off icia..</p>
                        </div><!-- /.text-box -->

                        <div class="hp-icon-boxes">
                            <div class="right-side-box">
                                <a style="color:#fff ; background:#00546d;" href="mailto:info@huntaproperty.com" class="rqa-btn">Explore More</a>
                            </div>
                        </div><!-- /.icon-box -->

                    </div><!-- /.single-service-style-one -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.container -->
        </section><!-- /.service-style-one sec-pad -->
    @include('frontend.partials.footer')
@endsection
