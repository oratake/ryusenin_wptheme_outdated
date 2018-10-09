<footer id="footer" class="footer text-white bg-dark p-4">
  <p class="text-center">© 2018 Ryusen-in</p>
  <p class="pagetop is-hide"><a href="#top">▲</a></p>

</footer>

<!-- script -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script type="text/javascript">
  $('.bs-component [data-toggle="popover"]').popover();
  $('.bs-component [data-toggle="tooltip"]').tooltip();
  
  /* ページfadein */
  $('head').append(
    '<style type="text/css">.is-hide{display:none;}</style>'
  );
  $(window).on("load",function() {
    $('body').fadeIn(800).removeClass("is-hide");
  });
  
  /* トップにもどる */
  $(document).ready(function() {
    var pagetop = $('.pagetop');
    var nav = $('#navbar');
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        pagetop.fadeIn();
        nav.addClass('navbar-clear');
      } else {
        pagetop.fadeOut();
        nav.removeClass('navbar-clear');
      }
    });
    pagetop.click(function () {
      $('body, html').animate({ scrollTop: 0 }, 500);
      return false;
    });
  });

</script>
</body>
</html>