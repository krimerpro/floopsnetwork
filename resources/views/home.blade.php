@extends('layouts.default')
@section('content')

<!-- BEGIN OF page cover -->
<div class="hh-cover page-cover">
<!-- Cover Background -->
<div class="cover-bg pos-abs full-size bg-img  bg-blur-0" data-image-src="{{ asset('img/bg-default.png') }}"></div>

<!-- Transluscent mask as filter -->
<div class="cover-bg-mask pos-abs full-size bg-color" data-bgcolor="rgba(0, 0, 0, 0.81)"></div>

<!-- Line mask as filter -->
<div class="cover-bg-mask pos-abs full-size bg-line"></div>

</div>
<!--END OF page cover -->

<!-- BEGIN OF clock container -->
<div class="clock-container">
<!-- Coutdown Clock -->
<div class="clock clock-countdown">
  <div class="site-config"
      data-date="04/25/2023 00:00:00"
      data-date-timezone="+0"
      ></div>
  <div class="clock-wrapper">
    <div class="title">
      <h3>New website here in</h3>
    </div>

    <div class="clock-hms">
      <div class="tile tile-days">
        <span class="days">00</span>
        <span class="txt">days</span>
      </div>

      <div class="tile tile-hours">
        <span class="hours">00</span>
        <span class="txt">hours</span>
      </div>
      <div class="tile tile-minutes">
        <span class="minutes">00</span>
        <span class="txt">minutes</span>
      </div>
      <div class="tile tile-seconds">
        <span class="seconds">00</span>
        <span class="txt">seconds</span>
      </div>
    </div>
  </div>
</div>
</div>
<!-- END OF clock container -->

<!-- BEGIN OF page main content -->
<main class="page-main fullpg" id="mainpage">

    <!-- Begin of home section -->
    <div class="section section-home fp-auto-height-responsive" data-section="home">
        <div class="content">

            <!-- Begin of centered Content -->
            <section class="c-centered anim">
                <div class="wrapper">

                    <!-- Title and description -->
                    <div class="title-desc">
                        <div class="t-wrapper">
                            <!-- Logo -->
                            <!--<div class="logo home-logo ">
                                <img class="" src="img/logo.png" alt="Logo">
                            </div>-->
                            <!-- Title -->
                            <header class="title">
                                <h2><strong>FLOOPS NETWORK</strong>  arrive, are you ready?</h2>
                                <h3>Fastest and more scalable blockchain ecosystem</h3>
                            </header>
                        </div>
                    </div>

                    <!-- Action button -->
                    <div class="cta-btns">
                        <a class="btn rect-btn btn-inv"  href="https://t.me/">
                            <span class="txt">JOIN US</span>
                            <span class="arrow-icon"></span>
                        </a>

                        <a class="btn rect-btn" target="_blank"  href="https://pancakeswap.finance/swap?outputCurrency=">
                            <span class="txt">BUY NOW</span>
                            <span class="arrow-icon"></span>
                        </a>

                        <a class="btn rect-btn" target="_blank"  href="https://poocoin.app/tokens/">
                            <span class="txt">CHART</span>
                            <span class="arrow-icon"></span>
                        </a>
                    </div>

            <div class="clock-container-small"></div>

                </div>
            </section>
            <!-- End of centered Content -->
        </div>
    </div>
    <!-- End of home section -->

    <!-- Begin of about us section -->
    <div class="section section-about section-cent fp-auto-height-responsive" data-section="about-us">

        <section class="content clearfix">
            <!-- content title -->
            <!--<div class="c-title">
                <h2>Our company</h2>
            </div>-->

            <!-- left elements -->
            <div class="c-left anim">
                <div class="wrapper">
                    <!-- title and description -->
                    <header class="title-desc">
                        <h3 class="title">About Us</h3>
                        <h2>FLOOPS NETWORK</h2>
                    </header>

                    <!-- Action button -->
                    <div class="cta-btns">
                        <a class="btn arrow-circ-btn"  href="https://flops-network.gitbook.io/flops-network/">
                            <span class="txt">GITBOOK</span>
                            <span class="arrow-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end of left elements -->

            <!-- right elements -->
            <div class="c-right">
                <!-- title and texts wrapper-->
                <div class="wrapper">
                    <!-- title and description -->
                    <div class="title-desc">
                        <h4>Everything you should know</h4>
                        <p>Introducing Flops Network - ($FLOPS) is a blockchain Next Generation exclusively to decentralized finance applications. By focusing on blockchain functionality and dedicating it specifically to decentralized finance. Flops Network provides error risk reduction and the development of specific intelligent features for the fulfillment of financial services on the blockchain.</p>

                        <!--<div class="illustr">
                            <img src="/img/bg-default4.jpg" alt="Illustration">
                        </div>-->
                    </div>
                </div>
            </div>
            <!-- end of right elements -->
        </section>
    </div>
    <!-- End of about us section -->

    <!-- Begin of services section -->
    <div class="section section-services fp-auto-height-responsive" data-section="services">

        <section class="content clearfix">

            <!-- right elements -->
            <div class="c-left anim">
                <div class="wrapper">
                    <!-- title -->
                    <header class="title-desc">
                        <h2>Services</h2>
                        <p>Yes, we can do that all at once.</p>
                    </header>

                    <!-- Action button -->
                    <div class="cta-btns">
                        <a class="btn arrow-circ-btn"  href="#contact">
                            <span class="txt">Contact Us</span>
                            <span class="arrow-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end of right elements -->

            <!-- left elements -->
            <div class="c-right">
                <div class="wrapper">
                    <!-- Begin of features/services/offers -->
                    <ul class="item-list row small-up-1 medium-up-2 large-up-2">
                        <!-- item -->
                        <li class="column">
                            <div class="item-desc">
                                <h3>Painting</h3>
                                <div class="desc">
                                    <p>Lorem ipsum magicum dolor sit amet, consectetur adipiscing elit. Maecenas a sem ultrices neque vehicula fermentum a sit amet nulla.</p>
                                </div>
                            </div>
                        </li>
                        <!-- item -->
                        <li class="column">
                            <div class="item-desc">
                                <h3>Design</h3>
                                <div class="desc">
                                    <p>Lorem ipsum magicum dolor sit amet, consectetur adipiscing elit. Maecenas a sem ultrices neque vehicula fermentum a sit amet nulla.</p>
                                </div>
                            </div>
                        </li>
                        <!-- item -->
                        <li class="column">
                            <div class="item-desc">
                                <h3>Attorney</h3>
                                <div class="desc">
                                    <p>Lorem ipsum magicum dolor sit amet, consectetur adipiscing elit. Maecenas a sem ultrices neque vehicula fermentum a sit amet nulla.</p>
                                </div>
                            </div>
                        </li>
                        <!-- item -->
                        <li class="column">
                            <div class="item-desc">
                                <h3>Restaurant</h3>
                                <div class="desc">
                                    <p>Lorem ipsum magicum dolor sit amet, consectetur adipiscing elit. Maecenas a sem ultrices neque vehicula fermentum a sit amet nulla.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- End of features/services/offers -->
                </div>
            </div>
            <!-- end of left elements -->

        </section>

    </div>
    <!-- End of services section -->

    <!-- Begin of Works/projects section -->
    <div class="section section-projects fp-auto-height-responsive" data-section="projects">

        <section class="content clearfix">

            <!-- left elements -->
            <div class="c-left anim">
                <!-- title and texts wrapper-->
                <div class="wrapper">
                    <!-- title -->
                    <header class="title-desc">
                        <h2 class="title page-title">Projects</h2>
                        <p>Just a few sample among our huge amount of projects.</p>
                    </header>


                    <!-- Action button -->
                    <div class="cta-btns">
                        <a class="btn arrow-circ-btn"  href="#contact">
                            <span class="txt">Contact Us</span>
                            <span class="arrow-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end of left elements -->

            <!-- left elements -->
            <div class="c-right">
                <div class="wrapper clip-overflow">
                    <!-- Begin of works/services/products -->
                    <div class="slider-wrapper">
                        <!-- pagination -->
                        <div class="items-pagination"></div>
                        <div class="items-nav-container">
                            <div class="items-button items-button-prev"><a>Previous</a></div>
                            <div class="items-button items-button-next"><a>Next</a></div>
                        </div>
                        <!-- slider -->
                        <div class="items-slide">
                            <ul class="c-features-list row swiper-wrapper my-gallery">
                                <!-- item -->
                                <li class="column swiper-slide">
                                    <a href="#project_url_1">
                                        <div class="item-img">
                                            <div class="img bg-img" data-image-src="img/items/img-sample1.jpg"></div>
                                        </div>
                                        <div class="item-desc">
                                            <h4>Category / Website</h4>
                                            <h3 class="title">Entertainment </h3>
                                            <div class="desc">
                                                <p>Lorem ipsum magicum dolor sit amet, consectetur adipiscing elit. Maecenas a sem ultrices neque vehicula fermentum a sit amet nulla.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- item -->
                                <li class="column swiper-slide">
                                    <a href="#project_url_2">
                                        <div class="item-img">
                                            <div class="img bg-img" data-image-src="img/items/img-sample2.jpg"></div>
                                        </div>
                                        <div class="item-desc">
                                            <h4>Photo / Instagram</h4>
                                            <h3 class="title">Last Exploration</h3>
                                            <div class="desc">
                                                <p>Lorem ipsum magicum dolor sit amet, consectetur adipiscing elit. Maecenas a sem ultrices neque vehicula fermentum a sit amet nulla.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- item -->
                                <li class="column swiper-slide">
                                    <a href="#project_url_3">
                                        <div class="item-img">
                                            <div class="img bg-img" data-image-src="img/items/img-sample3.jpg"></div>
                                        </div>
                                        <div class="item-desc">
                                            <h4>Arts / Painting</h4>
                                            <h3 class="title">Painting</h3>
                                            <div class="desc">
                                                <p>Lorem ipsum magicum dolor sit amet, consectetur adipiscing elit. Maecenas a sem ultrices neque vehicula fermentum a sit amet nulla.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- item -->
                                <li class="column swiper-slide">
                                    <a href="#project_url_2">
                                        <div class="item-img">
                                            <div class="img bg-img" data-image-src="img/items/img-sample4.jpg"></div>
                                        </div>
                                        <div class="item-desc">
                                            <h4>Photo / Instagram</h4>
                                            <h3 class="title">Macro Lens</h3>
                                            <div class="desc">
                                                <p>Lorem ipsum magicum dolor sit amet, consectetur adipiscing elit. Maecenas a sem ultrices neque vehicula fermentum a sit amet nulla.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- simple link to an url -->
                                <!-- <li class="column swiper-slide">
                                    <a href="#project_url_2">
                                        <div class="item-img">
                                            <div class="img bg-img" data-image-src="img/items/img-sample4.jpg"></div>
                                        </div>
                                        <div class="item-desc">
                                            <h4>Photo / Instagram</h4>
                                            <h3 class="title">Macro Lens</h3>
                                            <div class="desc">
                                                <p>Lorem ipsum magicum dolor sit amet, consectetur adipiscing elit. Maecenas a sem ultrices neque vehicula fermentum a sit amet nulla.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- End of works/services/products -->
                </div>
            </div>
            <!-- end of left elements -->
        </section>
    </div>
    <!-- End of Works/projects section -->

</main>
@stop
