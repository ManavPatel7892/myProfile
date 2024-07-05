<!-- footer -->
<footer>
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <p class="text-muted" style="font-size:14px;">&copy; copyright Manav | <?php echo date("Y"); ?> All Rights Reserved</p>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script src="lib/jquery-3.3.1.min.js"></script>
<script src="lib/popper.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/jquery.smooth-scroll.js"></script>
<script src="lib/imagesloaded.pkgd.min.js"></script>
<script src="lib/owl.carousel.min.js"></script>
<script src="lib/typed.js"></script>
<script src="lib/jquery.waypoints.min.js"></script>
<script src="lib/jquery.filterizr.min.js"></script>
<script src="js/app.js"></script>
<script>

    $(window).on('load', function() {
        $('.preloader').delay(400).fadeOut('slow', function() {
            $(this).addClass('complete').css('display', ''); // Ensure visibility:hidden; is applied after animation
        });
    });
</script>
</body>

</html>