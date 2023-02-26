    <!-- jquery JS -->
        <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS -->
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Mobile menu JS -->
        <script src="{{ asset('frontend/js/jquery.meanmenu.js') }}"></script>
    <!-- jquery.easing js -->
        <script src="{{ asset('frontend/js/jquery.easing.1.3.min.js') }}"></script>
    <!-- knob circle js -->
        <script src="{{ asset('frontend/js/jquery.knob.js') }}"></script>
    <!-- fancybox JS -->
        <script src="{{ asset('frontend/fancy-box/jquery.fancybox.pack.js') }}"></script>
    <!-- price slider JS  -->
        <script src="{{ asset('frontend/js/price-slider.js') }}"></script>
    <!-- nivo slider JS -->
        <script src="{{ asset('frontend/js/jquery.nivo.slider.pack.js') }}"></script>
    <!-- wow JS -->
        <script src="{{ asset('frontend/js/wow.js') }}"></script>
    <!-- nivo-plugin JS -->
    <script src="{{ asset('frontend/js/nivo-plugin.js') }}"></script>
    <!-- scrollUp JS -->
    <script src="{{ asset('frontend/js/jquery.scrollUp.js') }}"></script>
    <!-- carousel JS -->
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- plugins JS -->
        <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <!-- main JS  -->
        <script src="{{ asset('frontend/js/main.js') }}"></script>




<script type="text/javascript" src="{{ asset('frontend/developer.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  {{--   <script>
  @if(Session::has('message'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.warning("{{ session('warning') }}");
  @endif
</script>
  <script>
    var stickyHeader = $('header').offset().top;

    $(window).scroll(function () {
      if ($(window).scrollTop() > stickyHeader) {
        $('header').addClass('stickyHeader');
      }
      else {
        $('header').removeClass('stickyHeader');
      }
    });
    $('.navbar-toggler').click(function () {
      $(this).find('i').toggleClass('la-times');
    });

    $('.brandsSlider .owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    });


  </script>

<script type="text/javascript">
      $(".update-cart").click(function (e) {
         e.preventDefault();
         var ele = $(this);
          $.ajax({
             url: '{{ url('update-cart') }}',
             method: "POST",
             data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantityData").val()},
             success: function (response) {
                 window.location.reload();
             }
          });
      });
      $(".remove-from-cart").click(function (e) {
          e.preventDefault();
          var ele = $(this);
          if(confirm("Are you sure")) {
              $.ajax({
                  url: '{{ url('remove-from-cart') }}',
                  method: "POST",
                  data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                  success: function (response) {
                      window.location.reload();
                  }
              });
          }
      });
</script>


<script type="text/javascript">
      $("#productSort").change(function (e) {
         e.preventDefault();
         var sortItem = $("#productSort").val();
         var urlforthis = '{{ url('shop') }}';
          $.ajax({
             url: '{{ url('shop') }}',
             method: "GET",
             data: {sort: sortItem},
             success: function (response) {
            window.location.href = urlforthis+'?sort='+sortItem;
             }
          });
      });
</script>
 --}}

</body>

</html>