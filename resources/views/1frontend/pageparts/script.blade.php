<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.js')}}"></script>
  <script src="{{ asset('frontend/vendor/choices.js/public/assets/scripts/choices.js')}}"></script>
  <script src="{{ asset('frontend/vendor/nouislider/nouislider.min.js')}}"></script>
  <script src="{{ asset('frontend/js/theme-scripts.js')}}"></script>
  <script src="{{ asset('frontend/js/js-cookie.55cdbe0d.js')}}"> </script>
  <script src="{{ asset('frontend/js/demo.7c677988.js')}}"> </script>
{{--   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
    integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script type="text/javascript" src="{{ asset('frontend/js/developer.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
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


</body>

</html>