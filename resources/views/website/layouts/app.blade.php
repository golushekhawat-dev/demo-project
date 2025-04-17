
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Onix Digital Marketing</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('website/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('website/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/templatemo-onix-digital.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/owl.css')}}">

<!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

-->
  </head>

<body>

@include('website.layouts.header')

@yield('website.content')
@include('website.layouts.footer')

<!-- Scripts -->
<script src="{{asset('website/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('website/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('website/assets/js/animation.js')}}"></script>
  <script src="{{asset('website/assets/js/imagesloaded.js')}}"></script>
  <script src="{{asset('website/assets/js/custom.js')}}"></script>

  <script>
  // Acc
    $(document).on("click", ".naccs .menu div", function() {
      var numberIndex = $(this).index();

      if (!$(this).is("active")) {
          $(".naccs .menu div").removeClass("active");
          $(".naccs ul li").removeClass("active");

          $(this).addClass("active");
          $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

          var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
          $(".naccs ul").height(listItemHeight + "px");
        }
    });
  </script>
</body>
</html>