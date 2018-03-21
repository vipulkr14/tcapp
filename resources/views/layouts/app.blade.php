<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
{{--         <link rel="stylesheet" href="{{{ asset('css/app.css') }}}"
 --}}        <title>{{config('app.name','TravelCost')}}</title>
         <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">

      
    </head>
    <body>
    	<div>@include('inc.navbar')</div>
    	<div>
            @include('inc.messages')
    		@yield('content')
    	</div>
        <style type="text/css">
    p.indexani {
  position:fixed;
  width:90%;
  bottom:30px;
  font-size:12px;
  color:#999;
  margin-top:200px;
  text-align: right;
}
</style>
<p class="indexani">by Travelanture.com</p>

   
    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="http://instagram.com/theweekpacker">
              <i class="icon-social-instagram"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="http://twitter.com/vipulelrey">
              <i class="icon-social-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.facebook.com/travelanture">
              <i class="icon-social-facebook"></i>
            </a>
          </li>
           <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.linkedin.com/in/vipul-kr/">
              <i class="icon-social-linkedin"></i>
            </a>
          </li>
           <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://github.com/vipulkr14">
              <i class="icon-social-github"></i>
            </a>
          </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; Travelanture.com</p>
      </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>
    </body>
</html>
