@extends('frontend.layouts.main')
@section('main-section')
    @php
    $imageArr = [];

    if (!empty($banner)) {
        $imageArr = explode(',', $banner->image);
    }

    @endphp


    <!-- Main Slider Two -->
    <section class="main-slider-two">

        <div class="main-slider-carousel owl-carousel owl-theme">

            @php
                $imageArr = [];
                
                if (!empty($banner)) {
                    $imageArr = explode(',', $banner->image);
                }
                
            @endphp
            @switch($imageArr)
                @case(count($imageArr) == 1)
                    @foreach ($imageArr as $imgSrc)
                        <div class="slide" style="background-image:url({{ asset('storage/images/' . $imgSrc) }}">
                        </div>
                    @endforeach

                    @for ($i = 2; $i <= 5; $i++)
                        <div class="slide"
                            style="background-image:url({{ url('frontend/images/main-slider/full-slide-' . $i . '.jpg') }})">
                        </div>
                    @endfor
                @break

                @case(count($imageArr) == 2)
                    @foreach ($imageArr as $imgSrc)
                        <div class="slide" style="background-image:url({{ asset('storage/images/' . $imgSrc) }})">
                        </div>
                    @endforeach
                    @for ($i = 3; $i <= 5; $i++)
                        <div class="slide"
                            style="background-image:url({{ url('frontend/images/main-slider/full-slide-' . $i . '.jpg') }})">
                        </div>
                    @endfor
                @break

                @case(count($imageArr) == 3)
                    @foreach ($imageArr as $imgSrc)
                        <div class="slide" style="background-image:url({{ asset('storage/images/' . $imgSrc) }})">
                        </div>
                    @endforeach
                    @for ($i = 4; $i <= 5; $i++)
                        <div class="slide"
                            style="background-image:url({{ url('frontend/images/main-slider/full-slide-' . $i . '.jpg') }})">
                        </div>
                    @endfor
                @break

                @case(count($imageArr) == 4)
                    @foreach ($imageArr as $imgSrc)
                        <div class="slide" style="background-image:url({{ asset('storage/images/' . $imgSrc) }})">
                        </div>
                    @endforeach
                    @for ($i = 5; $i <= 5; $i++)
                        <div class="slide"
                            style="background-image:url({{ url('frontend/images/main-slider/full-slide-' . $i . '.jpg') }})">
                        </div>
                    @endfor
                @break

                @default
                    @if (count($imageArr) > 0)
                        @foreach ($imageArr as $key => $imgSrc)
                            <div class="slide" style="background-image:url({{ asset('storage/images/' . $imgSrc) }})">
                            </div>
                            @if ($key == 4)
                            @break
                        @endif
                    @endforeach
                @else
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="slide"
                            style="background-image:url({{ url('frontend/images/main-slider/full-slide-' . $i . '.jpg') }})">
                        </div>
                    @endfor
                @endif
        @endswitch


    </div>

    <!--Scroll Dwwn Btn-->
    <div class="mouse-btn-down scroll-to-target" data-target=".search-home-section">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
    </div>
</section>
<!-- End Main Slider Two -->



<!-- Property Section Two -->
<section class="property-section-two">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h1>About Twilight Camping</h1>
            <div class="separator"></div>
        </div>

        <!-- Five Columns -->
        <div class="five-col-theme">
            <div class="row clearfix">

                <!--Column-->
                <article class="column">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-bed"></span></div>
                        <h6 class="title">Bedrooms</h6>
                        <h5 class="count">4</h5>
                    </div>
                </article>

                <!--Column-->
                <article class="column">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-dimension"></span></div>
                        <h6 class="title">Square Feet</h6>
                        <h5 class="count">4500</h5>
                    </div>
                </article>

                <!--Column-->
                <article class="column">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-shower"></span></div>
                        <h6 class="title">Baths</h6>
                        <h5 class="count">3</h5>
                    </div>
                </article>

                <!--Column-->
                <article class="column">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-calendar-3"></span></div>
                        <h6 class="title">Year Build</h6>
                        <h5 class="count">2020</h5>
                    </div>
                </article>

                <!--Column-->
                <article class="column">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-garage-1"></span></div>
                        <h6 class="title">Car Parking</h6>
                        <h5 class="count">2</h5>
                    </div>
                </article>

            </div>
        </div>

    </div>
</section>
<!-- End Property Section Two -->

<!-- Recent Properties Section -->
<section class="recent-properties-section">
    <div class="auto-container">
        <div class="sec-title centered">
            <h1>Our Tent</h1>
            <div class="separator"></div>
        </div>

        <div class="row clearfix">

            <!-- Property Block -->
            <div class="property-block-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="clearfix">
                        <div class="image-box col-lg-6 col-md-12 col-sm-12">
                            <figure class="image"><img
                                    src="{{ url('frontend/images/resource/property-4.jpg') }}" alt=""></figure>
                            <span class="for">FOR SALE</span>
                            <span class="featured">FEATURED</span>
                        </div>
                        <div class="lower-content col-lg-6 col-md-12 col-sm-12">
                            <h5><a href="properties-detail.html">Tent for Single/Couple.</a></h5>
                            <div class="lucation"><i class="la la-map-marker"></i> With Food</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                <li><i class="flaticon-food"></i> 1 Bedrooms</li>
                                <li><i class="flaticon-garage-1"></i> 1 Garage</li>
                                <li><i class="flaticon-toilet"></i> 2 Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="{{ route('single-tent-details.withfood') }}"
                                        class="theme-btn">More Detail</a></div>
                                <div class="price"><a
                                        href="{{ url('checkout?category=single_tent&food=yes') }}"
                                        class="theme-btn" style="color:white;"><b>BOOK NOW</b></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Property Block -->
            <div class="property-block-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="clearfix">
                        <div class="image-box col-lg-6 col-md-12 col-sm-12">
                            <figure class="image"><img
                                    src="{{ url('frontend/images/resource/property-5.jpg') }}" alt=""></figure>
                            <span class="for">FOR Rent</span>
                            <span class="featured">FEATURED</span>
                        </div>
                        <div class="lower-content col-lg-6 col-md-12 col-sm-12">
                            <h5><a href="properties-detail.html">Tent for Single/Couple.</a></h5>
                            <div class="lucation"><i class="la la-map-marker"></i> Without Food</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                <li><i class="flaticon-bed"></i> 3 Bedrooms</li>
                                <li><i class="flaticon-garage-1"></i> 1 Garage</li>
                                <li><i class="flaticon-toilet"></i> 3 Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a href="{{ route('single-tent-details.withoutfood') }}"
                                        class="theme-btn">More Detail</a></div>
                                <div class="price">
                                    <a href="{{ url('checkout?category=single_tent&food=no') }}"
                                        class="theme-btn" style="color:white;"><b>BOOK NOW</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Property Block -->
            <div class="property-block-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="clearfix">
                        <div class="image-box col-lg-6 col-md-12 col-sm-12">
                            <figure class="image"><img
                                    src="{{ url('frontend/images/resource/property-6.jpg') }}" alt=""></figure>
                            <span class="for">Available</span>
                        </div>
                        <div class="lower-content col-lg-6 col-md-12 col-sm-12">
                            <h5><a href="properties-detail.html">Tent for Grouped People</a></h5>
                            <div class="lucation"><i class="la la-map-marker"></i> With Food</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                <li><i class="flaticon-bed"></i> 2 Bedrooms</li>
                                <li><i class="flaticon-garage-1"></i> 2 Garage</li>
                                <li><i class="flaticon-toilet"></i> 1 Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a
                                        href="{{ route('single-tent-details.groupwithoutfood') }}"
                                        class="theme-btn">More Detail</a></div>
                                <div class="price">
                                    <a href="{{ url('checkout?category=group_tent&food=yes') }}"
                                        class="theme-btn" style="color:white;"><b>BOOK NOW</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Property Block -->
            <div class="property-block-two col-lg-6 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="clearfix">
                        <div class="image-box col-lg-6 col-md-12 col-sm-12">
                            <figure class="image"><img
                                    src="{{ url('frontend/images/resource/property-7.jpg') }}" alt=""></figure>
                            <span class="for sold">Sold Done</span>
                        </div>
                        <div class="lower-content col-lg-6 col-md-12 col-sm-12">

                            <h5><a href="properties-detail.html">Tent for Grouped People.</a></h5>
                            <div class="lucation"><i class="la la-map-marker"></i>without Food</div>
                            <ul class="property-info clearfix">
                                <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                                <li><i class="flaticon-bed"></i> 1 Bedrooms</li>
                                <li><i class="flaticon-garage-1"></i> 1 Garage</li>
                                <li><i class="flaticon-toilet"></i> 2 Bathroom</li>
                            </ul>
                            <div class="property-price clearfix">
                                <div class="read-more"><a
                                        href="{{ route('single-tent-details.groupwithfood') }}"
                                        class="theme-btn">More Detail</a></div>
                                <div class="price"><a
                                        href="{{ url('checkout?category=group_tent&food=no') }}"
                                        class="theme-btn" style="color:white;"><b>BOOK NOW</b></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Recent Properties Section -->


<!-- Gallery Section -->
<section class="gallery-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h1>Our Properties Gallery</h1>
            <div class="separator"></div>
        </div>

        <!--MixitUp Galery-->
        <div class="mixitup-gallery">
            <!--Filter-->
            <div class="filters text-center clearfix">
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter="all">View All</li>
                    <li class="filter" data-role="button" data-filter=".appartment">Appartments</li>
                    <li class="filter" data-role="button" data-filter=".house">House</li>
                    <li class="filter" data-role="button" data-filter=".form-house">Form House</li>
                    <li class="filter" data-role="button" data-filter=".commercial">Commercials</li>
                    <li class="filter" data-role="button" data-filter=".restaurent">Restaurent</li>
                </ul>
            </div>

            <div class="filter-list row clearfix">

                <!-- Project item -->
                <div class="gallery-item mix all restaurent col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="{{ url('frontend/images/gallery/7.jpg') }}" alt="">
                        </figure>
                        <div class="overlay-box">
                            <div class="icon-box">
                                <a href="properties-detail.html" class="link"><span
                                        class="icon fa flaticon-unlink"></span></a>
                                <a href="{{ url('frontend/images/gallery/1.jpg') }}" class="link"
                                    data-fancybox="gallery" data-caption=""><span
                                        class="icon fa fa-expand-arrows-alt"></span></a>
                                <h3><a href="properties-detail.html">France Property</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project item -->
                <div class="gallery-item mix all restaurent commercial col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="{{ url('frontend/images/gallery/8.jpg') }}" alt="">
                        </figure>
                        <div class="overlay-box">
                            <div class="icon-box">
                                <a href="properties-detail.html" class="link"><span
                                        class="icon fa flaticon-unlink"></span></a>
                                <a href="images/gallery/8.jpg" class="link" data-fancybox="gallery"
                                    data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                <h3><a href="properties-detail.html">Commerical Building</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project item -->
                <div class="gallery-item mix all restaurent house col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="{{ url('frontend/images/gallery/9.jpg') }}" alt="">
                        </figure>
                        <div class="overlay-box">
                            <div class="icon-box">
                                <a href="properties-detail.html" class="link"><span
                                        class="icon fa flaticon-unlink"></span></a>
                                <a href="images/gallery/9.jpg" class="link" data-fancybox="gallery"
                                    data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                <h3><a href="properties-detail.html">News Flats Property</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project item -->
                <div class="gallery-item mix all appartment commercial col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="{{ url('frontend/images/gallery/10.jpg') }}" alt="">
                        </figure>
                        <div class="overlay-box">
                            <div class="icon-box">
                                <a href="properties-detail.html" class="link"><span
                                        class="icon fa flaticon-unlink"></span></a>
                                <a href="images/gallery/10.jpg" class="link" data-fancybox="gallery"
                                    data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                <h3><a href="properties-detail.html">House For Sale Property</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project item -->
                <div class="gallery-item mix all restaurent form-house house col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="{{ url('frontend/images/gallery/11.jpg') }}" alt="">
                        </figure>
                        <div class="overlay-box">
                            <div class="icon-box">
                                <a href="properties-detail.html" class="link"><span
                                        class="icon fa flaticon-unlink"></span></a>
                                <a href="images/gallery/11.jpg" class="link" data-fancybox="gallery"
                                    data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                <h3><a href="properties-detail.html">New Villas</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project item -->
                <div class="gallery-item mix all restaurent form-house col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/12.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <div class="icon-box">
                                <a href="properties-detail.html" class="link"><span
                                        class="icon fa flaticon-unlink"></span></a>
                                <a href="images/gallery/12.jpg" class="link" data-fancybox="gallery"
                                    data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                <h3><a href="properties-detail.html">Form House</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project item -->
                <div class="gallery-item mix all form-house col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/13.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <div class="icon-box">
                                <a href="properties-detail.html" class="link"><span
                                        class="icon fa flaticon-unlink"></span></a>
                                <a href="images/gallery/13.jpg" class="link" data-fancybox="gallery"
                                    data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                <h3><a href="properties-detail.html">German Commercial Property</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project item -->
                <div class="gallery-item mix all house commercial col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/14.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <div class="icon-box">
                                <a href="properties-detail.html" class="link"><span
                                        class="icon fa flaticon-unlink"></span></a>
                                <a href="images/gallery/14.jpg" class="link" data-fancybox="gallery"
                                    data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                <h3><a href="properties-detail.html">New York Houses</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project item -->
                <div class="gallery-item mix all form-house commercial col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="images/gallery/15.jpg" alt=""></figure>
                        <div class="overlay-box">
                            <div class="icon-box">
                                <a href="properties-detail.html" class="link"><span
                                        class="icon fa flaticon-unlink"></span></a>
                                <a href="images/gallery/15.jpg" class="link" data-fancybox="gallery"
                                    data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                <h3><a href="properties-detail.html">Sydney Form House</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Button Box -->
            <div class="btn-box text-center">
                <a href="#" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
            </div>

        </div>

    </div>
</section>
<!-- End Gallery Section -->

<!--Talk Section-->
<section class="talk-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Column-->
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="icon-box">
                        <span class="icon flaticon-key"></span>
                    </div>
                    <h3>Let’s talk about our new properies.</h3>
                    <div class="text">Lorem ipsum dolor sit amet edit, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore.</div>
                </div>
            </div>
            <!--Button Column-->
            <div class="button-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Contact
                            Us</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Talk Section-->



<!-- Testimonial Section -->
<section class="testimonial-section alternate">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h1>What Clients Reviews</h1>
            <div class="separator"></div>
        </div>

        <div class="single-item-carousel owl-carousel owl-theme">

            <!-- Testimonial Block Two -->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="content-box">
                        <div class="quote-icon flaticon-quote-2"></div>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco labo ris nisi ut aliquip.</p>
                        <h3>Anjalina Mark</h3>
                        <p class="designation">New York</p>
                    </div>
                    <div class="image-box">


                        <img src="{{ url('frontend/images/resource/author-5.png') }}" alt="" />
                    </div>
                </div>
            </div>

            <!-- Testimonial Block Two -->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="content-box">
                        <div class="quote-icon flaticon-quote-2"></div>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco labo ris nisi ut aliquip.</p>
                        <h3>Bob Wolmer</h3>
                        <p class="designation">Sydney</p>
                    </div>
                    <div class="image-box">
                        <img src="{{ url('frontend/images/resource/author-6.png') }}" alt="" />
                    </div>
                </div>
            </div>

            <!-- Testimonial Block Two -->
            <div class="testimonial-block-two">
                <div class="inner-box">
                    <div class="content-box">
                        <div class="quote-icon flaticon-quote-2"></div>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco labo ris nisi ut aliquip.</p>
                        <h3>Mark Voucher</h3>
                        <p class="designation">California</p>
                    </div>
                    <div class="image-box">
                        <img src="{{ url('frontend/images/resource/author-7.png') }}" alt="" />
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Testimonial Section -->


<!--Newsleter Section-->
<section class="newsletter-section" style="background-image:url(images/background/1.jpg)">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">

                <!--Title Column-->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="icon-box">
                            <span class="icon flaticon-door-knob"></span>
                        </div>
                        <h4>Newsletter Subscription</h4>
                        <div class="title">Get latest news & updates</div>
                    </div>
                </div>

                <!--Form Column-->
                <div class="form-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!--Subscribe Form-->
                        <div class="subscribe-form">
                            <form method="post"
                                action="http://ary-themes.com/html/noor_tech/dream-property/contact.html">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Email Address" required>
                                    <button type="submit" class="submit-btn">Submit Now</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--End Newsleter Section-->
@endsection
