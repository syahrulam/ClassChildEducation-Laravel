<title>Class Child Education</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{ asset('vendor/technext/vacation-rental/css/animate.css') }}">

<link rel="stylesheet" href="{{ asset('vendor/technext/vacation-rental/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/technext/vacation-rental/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/technext/vacation-rental/css/magnific-popup.css') }}">

{{-- <link rel="stylesheet" href="{{ asset('vendor/technext/vacation-rental/css/bootstrap-datepicker.css') }}"> --}}
{{-- <link rel="stylesheet" href="{{ asset('vendor/technext/vacation-rental/css/jquery.timepicker.css') }}"> --}}

<link rel="stylesheet" href="{{ asset('vendor/technext/vacation-rental/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/technext/vacation-rental/css/style.css') }}">

<!-- <link rel="icon" type="image/x-icon" href="/images/favicon.ico"> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" integrity="sha512-3JRrEUwaCkFUBLK1N8HehwQgu8e23jTH4np5NHOmQOobuC4ROQxFwFgBLTnhcnQRMs84muMh0PnnwXlPq5MGjg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .lds-ring {
        display: block;
        position: absolute;
        width: 80px;
        height: 80px;
    }

    .lds-ring div {
        z-index: 1000;
        top: 45%;
        left: 48%;
        box-sizing: border-box;
        display: block;
        position: fixed;
        width: 64px;
        height: 64px;
        margin: 8px;
        border: 8px solid #ed1b2f;
        border-radius: 50%;
        animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
        border-color: #ed1b2f transparent transparent transparent;
    }

    .lds-ring div:nth-child(1) {
        animation-delay: -0.45s;
    }

    .lds-ring div:nth-child(2) {
        animation-delay: -0.3s;
    }

    .lds-ring div:nth-child(3) {
        animation-delay: -0.15s;
    }

    @keyframes lds-ring {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>