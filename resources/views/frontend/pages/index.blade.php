    @extends('frontend.layouts.app')
        @section('head')
            <title>Homepage | Humantain</title>
            <meta name="description" content="">
            <meta name="keywords" content="">
        @endsection
        @section('content')

            <div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active slide-1" style="background: url({{ asset('frontend/img/site/slider-1.jpg') }}) rgba(0, 0, 0, 0.5);background-size:cover;
                    background-blend-mode: multiply;background-position: center center;">

                        <div class="carousel-caption">
                            <div class="container">
                                <div class="box valign-middle">
                                    <div class="content text-center">
                                        <h3 data-animation="animated fadeInUp">Image Database Checklist</h3>
                                        <h2 data-animation="animated fadeInUp">By being Local Experts</h2>
                                        <p data-animation="animated fadeInDown">Our agents are specialised in giving you the advantage of <br> years of experience and inside knowledge</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-2" style="background:url({{ asset('frontend/img/site/slider-2.jpg') }}) rgba(0, 0, 0, 0.5);background-size:cover;
                    background-blend-mode: multiply;background-position: center center;">

                        <div class="carousel-caption">
                            <div class="container">
                                <div class="box valign-middle">
                                    <div class="content text-center">
                                        <h3 data-animation="animated fadeInUp">Image Database Checklist</h3>
                                        <h2 data-animation="animated fadeInUp">By using Innovative Marketing</h2>
                                        <p data-animation="animated fadeInDown">We ensure every property we list is presented at a consistently <br> high standard to stand out from the competition</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item slide-3" style="background:url({{ asset('frontend/img/site/slider-3.jpg') }}) rgba(0, 0, 0, 0.5);background-size:cover;
                    background-blend-mode: multiply;background-position: center center;">

                        <div class="carousel-caption">
                            <div class="container">
                                <div class="box valign-middle">
                                    <div class="content text-center">
                                        <h3 data-animation="animated fadeInUp">Image Database Checklist</h3>
                                        <h2 data-animation="animated fadeInUp">With High Values</h2>
                                        <p data-animation="animated fadeInDown">Place prides itself on its people and the values we strive <br> to reflect both professionally and personally</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">
                    <i class="fas fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">
                    <i class="fas fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                </a>

                <ul class="carousel-indicators list-inline custom-navigation">
                    <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li><!--
                    --><li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li><!--
                    --><li data-target="#minimal-bootstrap-carousel" data-slide-to="2"></li>
                </ul>
            </div>
            <section class="about-style-two about-us-style-one sec-pad" id="about">

                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ asset('frontend/img/site/welcome.jpg')}}" class="pull-right" alt="Awesome Image"/>
                        </div><!-- /.col-md-5 -->
                        <div class="col-md-7">
                            <div class="about-content">
                                <h3>Welcome to Image Database Checklist:</h3>
                                <span>A dominant Company Located in The Heart of London.</span>
                                <p>Image Database Checklist is filled with capable and hardworking agents who would love nothing more than to dazzle you with their local knowledge and expertise. Because we help people to find a new place to call “Home”.</p>
                                <div class="brand-logos">
                                    <ul>
                                        <li>Over 4 years of experience in the UK property market</li>
                                        <li>We’re an ethical business, with real business values</li>
                                        <li>Proven results that speak for themselves</li>
                                    </ul>
                                </div><!-- /.brand-logos -->
                            </div><!-- /.about-content -->
                        </div><!-- /.col-md-7 -->
                    </div><!-- /.row -->
            </section><!-- /.about-style-two -->

            <section class="about-us-style-one" id="sales">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-content">
                                <span>Carpets</span>
                                <h3>We individually assess each
                                    <br /> property and offer optimal solutions</h3>
                                <h4>We have built up a rich database of potential buyers across the
                                    country from where you can get potential buyers easily.</h4>
                                <p>Our industry experience allows us to have a more in-depth understanding of our client’s intentions, motivations, and consideration. Thus, we offer them personalised services belonging to their expectations with extremely efficient selling fees.</p>
                            </div><!-- /.about-content -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6 text-right">
                            <img src="{{ asset('frontend/img/site/carpet.jpg') }}" alt="Awesome Image"/>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.about-us-style-one -->

            <section class="about-us-style-one sec-pad" id="renting">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <img src="{{ asset('frontend/img/site/wallpaper.jpg') }}" alt="Awesome Image"/>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="about-content">
                                <span>Wallpapers</span>
                                <h3>We discover special place
                                     <br />That you have ever dreamed of.</h3>
                                <h4>With both short and long-term contracts available, Image Database Checklist London has exactly what you need.</h4>
                                <p>Not sure what really suit you best? We assist our clients to choose the place where they should be. Our database of unparalleled resources gives our clients an option to discover their perfect match.</p>
                            </div><!-- /.about-content -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.about-us-style-one -->

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

            <section class="faq-feature-wrapper faq-style-one sec-pad">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="sec-title">
                                <h3>Clients’ Review</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, aperiam consequuntur dolore mollitia laborum officia recusandae quae. Perspiciatis aut maxime ab, suscipit nesciunt. Pariatur voluptatem</p>
                            </div><!-- /.sec-title -->
                            <div class="accrodion-grp" data-grp-name="faq-accrodion">
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem. Possimus, assumenda recusandae aut, culpa beatae consequuntur</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion ">
                                    <div class="accrodion-title">
                                        <h4>Dolor sit amet, consectetuer adipiscing elit</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem. Possimus, assumenda recusandae aut, culpa beatae consequuntur</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Sed diam nonummy nibh euismod</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem. Possimus, assumenda recusandae aut, culpa beatae consequuntur</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="feature-style-one">
                                <div class="sec-title">
                                    <h3>Our Strength</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem acc usantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. Ab illo inventore veritatis et quasi archite.</p>
                                </div><!-- /.sec-title -->
                                <div class="single-feature-style-one">
                                    <div class="icon-box">
                                        <i class="zxp-icon-pumpjack"></i>
                                    </div><!-- /.icon-box -->
                                    <div class="text-box">
                                        <h3>Advanced Technology</h3>
                                        <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam ali quam quaerat voluptatem.</p>
                                    </div><!-- /.text-box -->
                                </div><!-- /.single-feature-style-one -->
                                <div class="single-feature-style-one">
                                    <div class="icon-box">
                                        <i class="zxp-icon-architect-with-helmet"></i>
                                    </div><!-- /.icon-box -->
                                    <div class="text-box">
                                        <h3>Expert Team</h3>
                                        <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam ali quam quaerat voluptatem.</p>
                                    </div><!-- /.text-box -->
                                </div><!-- /.single-feature-style-one -->
                                <div class="single-feature-style-one">
                                    <div class="icon-box">
                                        <i class="zxp-icon-time-passing"></i>
                                    </div><!-- /.icon-box -->
                                    <div class="text-box">
                                        <h3>On time Delivery</h3>
                                        <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam ali quam quaerat voluptatem.</p>
                                    </div><!-- /.text-box -->
                                </div><!-- /.single-feature-style-one -->
                            </div><!-- /.feature-style-one -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.faq-feature-wrapper -->
            <div class="brand-carousel-wrapper">
                <div class="container">
                    <div class="brand-carousel owl-theme">
                        <div class="item">
                            <img src="{{ asset('frontend/img/primelocation.png') }}" alt="" style="width: 162px; margin-right: 90px;">
                        </div><!-- /.item -->
                        <div class="item">
                            <img src="{{ asset('frontend/img/onthemarket-1.png') }}" alt="" style="width: 162px; margin-right: 90px;">
                        </div><!-- /.item -->
                        <div class="item">
                            <img src="{{ asset('frontend/img/rightmove.png') }}" alt="" style="width: 162px; margin-right: 90px;">
                        </div><!-- /.item -->
                        <div class="item">
                            <img src="{{ asset('frontend/img/zoopla.png') }}" alt="" style="width: 162px; margin-right: 90px;">
                        </div><!-- /.item -->
                        <div class="item">
                            <img src="{{ asset('frontend/img/rightmove.png') }}" alt="" style="width: 162px; margin-right: 90px;">
                        </div><!-- /.item -->
                    </div><!-- /.brand-carousel -->
                </div><!-- /.container -->
            </div><!-- /.brand-carousel-wrapper -->

            <section class="blog-style-two sec-pad">
                <div class="container">
                    <div class="sec-title">
                        <div class="row">
                            <div class="col-md-3">
                                <h3>Recent News</h3>
                            </div><!-- /.col-md-3 -->
                                <div class="col-md-6">
                                    <p>Get the latest property news of the UK market and keep yourself up-to-date on property prices, popular locations, and latest market trends.</p>
                                </div><!-- /.col-md-6 -->

                        </div><!-- /.row -->
                    </div><!-- /.sec-title -->
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog-style-two">
                                <div class="img-box">
                                    <img src="{{ asset('frontend/img/site/news-1.jpg')}}" alt="Awesome Image"/>
                                    <a rel=”noopener noreferrer” target="_blank" href="{{ url('https://www.zoopla.co.uk/discover/property-news/first-time-buyers-to-get-30-percent-discount-on-first-homes-government-scheme/') }}" class="read-more">Read Post</a>
                                </div><!-- /.img-box -->
                                <div class="text-box">
                                    <div class="meta-info">
                                        <a rel=”noopener noreferrer” target="_blank" href="{{ url('https://www.zoopla.co.uk/discover/property-news/first-time-buyers-to-get-30-percent-discount-on-first-homes-government-scheme/') }}"><i class="fas fa-clock"></i> June 4</a>
                                    </div><!-- /.meta-info -->
                                    <a rel=”noopener noreferrer” target="_blank" href="{{ url('https://www.zoopla.co.uk/discover/property-news/first-time-buyers-to-get-30-percent-discount-on-first-homes-government-scheme/') }}"><h3>Get 30% discount on new homes in proposed housing scheme</h3></a>
                                </div><!-- /.text-box -->
                            </div><!-- /.single-blog-style-two -->
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog-style-two">
                                <div class="img-box">
                                    <img src="{{ asset('frontend/img/site/news-2.jpg')}}" alt="Awesome Image"/>
                                    <a rel=”noopener noreferrer” target="_blank" href="{{ url('https://www.rightmove.co.uk/news/articles/property-news/overseas-market-interest-surges-lockdown') }}" class="read-more">Read Post</a>
                                </div><!-- /.img-box -->
                                <div class="text-box">
                                    <div class="meta-info">
                                        <a rel=”noopener noreferrer” target="_blank" href="{{ url('https://www.rightmove.co.uk/news/articles/property-news/overseas-market-interest-surges-lockdown') }}"><i class="fas fa-clock"></i> June 5</a>
                                    </div><!-- /.meta-info -->
                                    <a rel=”noopener noreferrer” target="_blank"  href="{{ url('https://www.rightmove.co.uk/news/articles/property-news/overseas-market-interest-surges-lockdown') }}"><h3>Interest in overseas property surges during lockdown</h3></a>
                                </div><!-- /.text-box -->
                            </div><!-- /.single-blog-style-two -->
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog-style-two">
                                <div class="img-box">
                                    <img src="{{ asset('frontend/img/site/news-3.jpg')}}" alt="Awesome Image"/>
                                    <a rel=”noopener noreferrer” target="_blank" href="{{ url('https://www.rightmove.co.uk/news/articles/property-news/is-now-good-time-buy-sell/') }}" class="read-more">Read Post</a>
                                </div><!-- /.img-box -->
                                <div class="text-box">
                                    <div class="meta-info">
                                        <a rel=”noopener noreferrer” target="_blank" href="{{ url('https://www.rightmove.co.uk/news/articles/property-news/is-now-good-time-buy-sell/') }}"><i class="fas fa-clock"></i> June 2</a>
                                    </div><!-- /.meta-info -->
                                    <a rel=”noopener noreferrer” target="_blank" href="{{ url('https://www.rightmove.co.uk/news/articles/property-news/is-now-good-time-buy-sell/') }}"><h3>Is now a good time to buy and sell?</h3></a>
                                </div><!-- /.text-box -->
                            </div><!-- /.single-blog-style-two -->
                        </div><!-- /.col-md-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.blog-style-two -->
            @include('frontend.partials.footer')
        @endsection
