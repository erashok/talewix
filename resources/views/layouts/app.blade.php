<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="author" content="@yield('user_name')">
    <meta property="og:title" content="@yield('meta_title')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:image" content="@yield('thum_image')">
    <meta property="og:image:height" content="300"> <!-- Fixed height for the image -->
    <meta property="og:image:width" content="300">  <!-- Fixed width for the image -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <meta http-equiv="robots" content="Index, All, Follow" />
	<meta name="viewport" content="width=device-width">
	<meta name="robots" content="index, follow" />
	<meta name="google-site-verification" content="CXYuUTdT_so2vtQEJpR16l8zHFctPXJKj7iGb1zUbcU" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <!-- Site CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/widgets.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <!-- Bunny fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net/">
    <link href="https://fonts.bunny.net/css?family=b612-mono:400,400i,700,700i|cabin:400,700|lora:400,400i,700,700i" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.13.3/tagify.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <!-- Icons fonts -->
    <link href="{{ asset('css/fontello.css') }}" rel="stylesheet">
    <!-- Popup -->
    <link href="{{ asset('css/popup.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.bpopup.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#popup_this').bPopup();
        });
    </script>

    <!-- Styles -->
    {{-- <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body class="home">
     <div class="top-scroll-bar"></div>

     @include('layouts.inc.frontend-mobile-navigation')

    <div id="wrapper">
        @include('layouts.inc.frontend-header')

         <main id="content">
            @yield('content')
         </main>
        @include('layouts.inc.frontend-footer')
       
    </div>
    <a href="#" class="back-to-top heading"><i class="icon-left-open-big"></i><span  class="d-lg-inline d-md-none">Top</span></a>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('js/theia-sticky-sidebar.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.4.0/tagify.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Include SweetAlert CSS and JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    {{-- <script src="https://js.stripe.com/v3/"></script> --}}
    
    <script>
        document.querySelectorAll('.subscribe-btn').forEach(button => {
    button.addEventListener('click', function () {
        const planId = this.dataset.planId;
        const price = this.dataset.price;

        fetch('/create-checkout-session', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ plan_id: planId, price: price })
        })
        .then(response => response.json())
        .then(data => {
            if (data.url) {
                window.location.href = data.url; // Redirect to Stripe's checkout page
            } else {
                alert(data.error || 'Something went wrong. Please try again.');
            }
        })
        .catch(error => console.error('Error:', error));
    });
});

    </script>
    <script>const customerData = {
        name: $('#customer_name').val(),
        email: $('#customer_email').val(),
        address: {
            line1: $('#address_line1').val(),
            line2: $('#address_line2').val(),
            city: $('#city').val(),
            state: $('#state').val(),
            postal_code: $('#postal_code').val(),
            country: $('#country').val() // Make sure this captures 'IN' for India
        }
    };
</script>    
    <script>document.addEventListener('DOMContentLoaded', function () {
        var input = document.querySelector('#tags');
         new Tagify(input);
    });
    </script>
    <script>
        $(document).ready(function() {
            $("#post_summernote").summernote({
                 height: 450,
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var dropdownToggle = document.getElementById('profileDropdown');
    var dropdownMenu = document.querySelector('.dropdown-menu');

    dropdownToggle.addEventListener('click', function(event) {
        event.preventDefault();  // Prevent the default link behavior
        dropdownMenu.classList.toggle('show');  // Toggle the 'show' class
    });

        // Close the dropdown if clicking outside of it
        document.addEventListener('click', function(event) {
            if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    });
     document.querySelector('.close-btn').addEventListener('click', function() {
        // Hide the modal when the close button is clicked
        $('#exampleModalCenter').modal('hide');
    });
    </script>
<script>
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function() {
            const form = this.closest('.delete-form');
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this post!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                closeOnConfirm: false
            }, function(isConfirm) {
                if (isConfirm) {
                    form.submit(); // Submit the form if confirmed
                } else {
                    swal("Cancelled", "Your post is safe :)", "error");
                }
            });
        });
    });
</script>
</body>
</html>
