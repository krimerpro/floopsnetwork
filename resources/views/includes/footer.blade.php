<!-- BEGIN OF page footer -->
<footer id="site-footer" class="site-footer">
    <!-- social networks -->
    <div class="contact">
        <ul class="socials">
            <li><a class="circ-btn" href="https://floops-network.gitbook.io/floops-network/"><i class="icon ion-social-github"></i></a></li>
            <li><a class="circ-btn" href="https://twitter.com/fadliadityo"><i class="icon ion-social-twitter"></i></a></li>
        </ul>
    </div>

    <!-- Notes -->
    <div class="note">
        <p> &copy; 2023 - by <a href="#"><span class="marked">FLOOPSNETWORK TEAM</span></a> </p>
    </div>

    <!-- subscription form -->
    <div class="subscription">
        <h3 class="title">Subscribe to Newsletter : </h3>
        <!-- Begin Ajax subscription form  subscription-form -->
        <form id="subscription-form" class="form send_email_form" method="post" action="#">
            <p class="feedback gone form-success-visible">Thank you for your subscription. We will inform you.</p>
            <input id="reg-email" class="input form-success-invisible" name="email" type="email" required placeholder="your@email.address" data-validation-type="email">
            <button id="submit-email" class="btn circ-btn form-success-invisible" name="submit_email">
                <span class="ion-checkmark"></span>
            </button>
        </form>
    </div>


    <!-- Arrows Scroll down arrow -->
    <!-- Move it next to fp nav using javascript -->
    <div class="s-footer scrolldown">
        <a class="down btn">
            <span class="text">Scroll</span>
        </a>
    </div>
    <!-- End of Scroll down arrow -->
</footer>
<!-- END OF site footer -->


<!-- scripts -->
<!-- All Javascript plugins goes here -->
<!--		<script src="//code.jquery.com/jquery-1.12.4.min.js"></script>-->
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- All vendor scripts -->
<script src="{{ asset('js/vendor/scrolloverflow.min.js') }}"></script>
<script src="{{ asset('js/vendor/all.js') }}"></script>
<script src="{{ asset('js/particlejs/particles.min.js') }}"></script>


<!-- Detailed vendor scripts : for manual update -->
<!--<script src="./js/vendor/swiper.min.js"></script>
<script src="./js/vendor/scrolloverflow.min.js"></script>
<script src="./js/vendor/jquery.fullPage.min.js"></script>
<script src="./js/vegas/vegas.min.js"></script>
<script src="./js/vendor/jquery.maximage.js"></script>-->

<!-- Countdown script -->
<script src="{{ asset('js/jquery.downCount.js') }}"></script>

<!-- Form script -->
<script src="{{ asset('js/form_script.js') }}"></script>

<!-- Javascript main files -->
<script src="{{ asset('js/main.js') }}"></script>
