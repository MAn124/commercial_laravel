<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Commercial 4 life</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{asset('/css/app.min.css')}}" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
           @include('layout.header')  
            <!-- Header END -->

            <!-- Side Nav START -->
            @include('layout.sidebar')  
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
              @include('layout.footer')
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="{{asset('/js/vendors.min.js')}}"></script>

    <!-- page js -->
    <script src="{{asset('/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{asset('/js/pages/dashboard-default.js')}}"></script>
    <script src="https://kit.fontawesome.com/78455fa1a9.js" crossorigin="anonymous"></script>
    <!-- Core JS -->
    <script src="{{asset('/js/app.min.js')}}"></script>



</body></html>