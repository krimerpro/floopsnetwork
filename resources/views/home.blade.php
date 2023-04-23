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
      data-date="04/30/2023 00:00:00"
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
                                <h2 style="color:white"><strong>FLOOPS NETWORK</strong>  arrive, are you ready?</h2>
                                <h3>Fastest and more scalable blockchain ecosystem</h3>
                            </header>
                        </div>
                    </div>

                    <!-- Action button -->
                    <div class="cta-btns">
                        <a class="btn rect-btn btn-inv"  href="https://t.me/floopsnetwork">
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
                        <a class="btn arrow-circ-btn"  href="https://floops-network.gitbook.io/floops-network/">
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
                        <p>Introducing Floops Network - ($FLOOPS) is a blockchain Next Generation exclusively to decentralized finance applications. By focusing on blockchain functionality and dedicating it specifically to decentralized finance. Floops Network provides error risk reduction and the development of specific intelligent features for the fulfillment of financial services on the blockchain.</p>

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
                        <p>Upcoming services by FLOOPS NETWORK</p>
                    </header>
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
                                <h3>Token Generator </h3>
                                <div class="desc">
                                    <p>Build a smart contract in the easiest way Secure your assets and any other important informations backed with two factor security options available along with in app secure Encrypt Engine to keep your data safe.</p>
                                    <p>An ERC20/BEP20 Another Network Contract generator that make developers create powerful token in various blockchain networks in simple way. Easy to use Fast & Cheap Smart features Secure platform</p>
                                </div>
                            </div>
                        </li>
                        <!-- item -->
                        <li class="column">
                            <div class="item-desc">
                                <h3>Token Locker and Launchpad</h3>
                                <div class="desc">
                                    <p>Token Locker and Launchpad Floops Network has no third person features. Token Generator, Token Locker, Launchpad will be integrated with each other on our platform, developers can develop their projects on our platform later with a choice of many networks such as BSC, ETH and $FLOOPS. developers can create their tokens on our platform and can lock liquidity on our platform even to launch their tokens on the Floops Network Platform. </p>
                                </div>
                            </div>
                        </li>
                        <!-- item -->
                        <li class="column">
                            <div class="item-desc">
                                <h3>Floops Wallet</h3>
                                <div class="desc">
                                    <p>Floops wallet makes it simple to monitor your progress and token balance in dollars in line with market expectations. When you click on the tokens, you'll get additional information about each token listed in the $FLOOPS Ecosystem. Secure your assets and any other important informations backed with two factor security options available along with in app secure Encrypt Engine to keep your data safe.</p>
                                </div>
                            </div>
                        </li>
                        <!-- item -->
                        <li class="column">
                            <div class="item-desc">
                                <h3>The chain-related infrastructure</h3>
                                <div class="desc">
                                    <p>Stake , Testnet , RPC $FLOOPS , Multichain Bridge .</p>
                                    <p>FloopsNetwork guarantees the safety of investors who buy projects born on the $FLOOPS platform, we are ready to act quickly with the reports of investors, If the Developer is proven to be cheating we guarantee that the liquidity they lock on our platform will not be withdrawn and will be returned to investors. and developers who want to use our launchpad will be given KYC requirements before launching on our platform. We will maintain the data of the developers.</p>
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

</main>
@stop
