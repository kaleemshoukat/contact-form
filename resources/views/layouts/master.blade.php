<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Code Attain</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

    <!-- Jquery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Jquery validator -->
    <script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- popper -->
    <script src="{{asset('plugins/popper/popper.min.js')}}"></script>
    <!-- Jquery validator bootstrap tooltip -->
    <script src="{{asset('plugins/jquery-validation-bootstrap-tooltip/jquery-validate.bootstrap-tooltip.min.js')}}"></script>
    <!-- Google Font: Source Sans Pro -->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}" rel="stylesheet">

    <!-- contact form css -->
    <link rel="stylesheet" href="{{asset('contactFormGray.css')}}">
</head>

<body>

<div class="container" id="app">
    @yield('content')
</div>

<footer style="background-color: #F2F2F2;">
    <div class="footer-top">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 mt-3">
                    <h3 class="text-secondary">Contact us</h3>
                    <p><i class="fas fa-phone"></i> Phone: <a href="tel:03351441256">0335-1441256</a></p>
                    <p><i class="fas fa-envelope"></i> Email: <a href="mailto:codeglory20@gmail.com">kaleemshoukat96@gmail.com</a></p>
                    <p><i class="fab fa-skype"></i> Skype: <a href="skype:kaleem_shoukat">kaleem_shoukat</a></p>
                </div>
                <div class="col-md-4 mt-3">
                    <h3 class="text-secondary">Follow us</h3>
                    <p class="mt-3">
                        <a href="https://www.facebook.com/kaleemshoukat96" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://www.linkedin.com/in/kaleem-shoukat" class="ml-4" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
                        <a href="https://www.instagram.com/kaleem_shoukat/" class="ml-4"target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-dark text-light">
        <div class="container text-center">
            <span>© {{date('Y')}} All Rights Reserved - Developed by Kaleem Shoukat</span>
        </div>
    </div>

    {{ TawkTo::widgetCode() }}
</footer>


<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5ef59c284a7c6258179b5e48/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
