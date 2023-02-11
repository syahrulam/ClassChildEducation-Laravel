<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<link href="{{ url('css/default.css') }}" rel="stylesheet">

<body>
    @include('includes.header')

    <div class="lds-ring">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    @yield('content')

    @include('includes.footer')
    @yield('scripts')
    <script>
        $('.lds-ring').hide();
    </script>

</body>

</html>