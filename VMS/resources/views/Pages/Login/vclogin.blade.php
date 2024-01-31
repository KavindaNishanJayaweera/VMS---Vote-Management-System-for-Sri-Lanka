<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themepixels.me/demo/bracket/app/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 16:07:59 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="../../../bracket/img/bracket-social.html">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="../../../bracket/img/bracket-social.html">
    <meta property="og:image:secure_url" content="../../../bracket/img/bracket-social.html">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    {{-- {{ asset('assets/plugins/splide/splide.min.css') kavinda css }} --}}
    <link href="{{ asset('Assest/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('Assest/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('Assest/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('Assest/lib/jquery-switchbutton/jquery.switchButton.css') }}" rel="stylesheet">

    <link href="{{ asset('Assest/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('Assest/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('Assest/lib/select2/css/select2.min.css') }}" rel="stylesheet">

    <link href="{{ asset('Assest/lib/highlightjs/github.css') }}" rel="stylesheet">

    <link href="{{ asset('Assest/lib/morris.js/morris.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('Assest/css/bracket.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css" integrity="sha512-JApjWRnfonFeGBY7t4yq8SWr1A6xVYEJgO/UMIYONxaR3C9GETKUg0LharbJncEzJF5Nmiv+Pr5QNulr81LjGQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
    <style>
        .extra-large-modal {
            max-width: 80%;
        }
    </style>

        <div class="pd-y-50 bg-gray-200 mg-t-80">
        {{-- <div class="modal d-block pos-static bg-light-500"> --}}
        <div class="modal d-block pos-static bg-light">
            <div class="modal-dialog extra-large-modal" role="document">
            {{-- <div class="modal-dialog modal-lg" role="document"> --}}
                <div class="modal-content bd-0 rounded-0 wd-xs-650 wd-xl-auto mg-xl-x-425">
                    <div class="modal-body pd-0">
                        <div class="row flex-row-reverse no-gutters">
                            <div class="col-xl-5">
                                <div class="pd-30">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="pd-xs-x-30 pd-y-90">
                                        <h5 class="tx-xs-28 tx-inverse mg-b-5">Welcome back!</h5><br>

                                        <form action="/login-asadmin" method="POST">
                                            @csrf
                                            <input type="text" name="v_nicp" class="form-control pd-y-12" placeholder="Enter your User Name" id="v_nicp">
                                            <p></p><p></p>
                                            <input type="text" name="v_name" class="form-control pd-y-12" placeholder="Enter your password" id="v_name">
                                            <p></p><p></p>
                                            <button type="submit" class="btn btn-danger pd-y-12 btn-block mg-b-10">Sign In</button>
                                        </form>
                                            {{-- <div class="mg-t-30 mg-b-20 tx-12">Don't have an account yet? <a href="#">Sign Up</a></div> --}}
                                    </div>
                                </div><!-- pd-20 -->
                            </div><!-- col-6 -->

                            <div class="col-xl-7 bg-danger active">
                                {{-- btn btn-danger active btn-block mg-b-10 --}}
                                <div class="pd-40">
                                    {{-- <h4 class="tx-white mg-b-15">Sri Lanka Election Department</h4> --}}
                                    <h4 class="tx-white tx-20 mg-b-65"><img src="{{ asset('Assest/img/Logo.PNG') }}" style="width: 125px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ශ්‍රී ලංකා මැතිවරණ දෙපාර්තමේන්තුව</h4>
                                    <p></p>
                                    <p class="tx-white op-7 tx-15 mg-b-55">The Election Commission of Sri Lanka is the constitutional authority responsible administering and overseeing all elections in Sri Lanka, including the Presidential, Parliamentary, Provincial and Local Authority elections.
                                        <br><br>ශ්‍රී ලංකා මැතිවරණ කොමිෂන් සභාව යනු ජනාධිපති, පාර්ලිමේන්තු, පළාත් සහ පළාත් පාලන මැතිවරණ ඇතුළුව ශ්‍රී ලංකාවේ සියලුම මැතිවරණ පරිපාලනය කිරීමේ සහ අධීක්ෂණය කිරීමේ වගකීම දරන ව්‍යවස්ථාපිත අධිකාරිය වේ.
                                    </p>
                                    <p class="tx-white tx-13">
                                    <span class="tx-uppercase tx-medium d-block mg-b-15">Funded In</span>
                                    <span class="op-7"> October 1, 1955</span>
                                    </p>
                                    <p class="tx-white tx-13">
                                        <span class="tx-uppercase tx-medium d-block mg-b-">Our Address:</span>
                                        <span class="op-7">Elections Secretariat, Sarana Mawatha, Rajagiriya 10107, Sri Lanka</span>
                                    </p>
                                </div>
                         </div><!-- col-6 -->
                    </div><!-- row -->
                </div><!-- modal-body -->
            </div><!-- modal-content -->
          </div><!-- modal-dialog -->
        </div><!-- modal -->

        <script src="{{ asset('Assest/lib/jquery/jquery.js')}}"></script>
        <script src="{{ asset('Assest/lib/popper.js/popper.js')}}"></script>
        <script src="{{ asset('Assest/lib/bootstrap/bootstrap.js')}}"></script>
        <script src="{{ asset('Assest/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
        <script src="{{ asset('Assest/lib/moment/moment.js')}}"></script>
        <script src="{{ asset('Assest/lib/jquery-ui/jquery-ui.js')}}"></script>
        <script src="{{ asset('Assest/lib/jquery-switchbutton/jquery.switchButton.js')}}"></script>
        <script src="{{ asset('Assest/lib/peity/jquery.peity.js')}}"></script>
        <script src="{{ asset('Assest/js/bracket.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.2.1/ionicons.min.js" integrity="sha512-8O7VIjJxO2P/Vfm34bYnEbPwocNkwUQdzJCYooCDWP9MT4GpPw5Ktmk9NxVyWfrzDlXnbCsZzSUR81Etc6gv0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="{{  asset('Assest/lib/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{  asset('Assest/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
        <script src="{{  asset('Assest/lib/select2/js/select2.min.js') }}"></script>
        <script src="{{  asset('Assest/lib/highlightjs/highlight.pack.js') }}"></script>
        <script src="{{  asset('Assest/lib/raphael/raphael.min.js') }}"></script>
        {{-- <script src="{{  asset('Assest/lib/morris.js/morris.js') }}"></script>
        <script src="{{  asset('Assest/js/chart.morris.js') }}"></script> --}}
    </body>
<!-- Mirrored from themepixels.me/demo/bracket/app/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 16:07:59 GMT -->
</html>

