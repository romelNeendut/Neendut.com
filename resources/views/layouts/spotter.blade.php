<!DOCTYPE html>
<html lang="en">

<head>
<meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}"/>
@include('templates.spotter.head')
</head>

<body>
@include('templates.spotter.header')

<div id="outer-wrapper">
    <!-- Inner Wrapper -->
    <div id="inner-wrapper">
    @yield('content')


    @include('templates.spotter.footer')
    </div>
    <!-- end Inner Wrapper -->
</div>

</body>
</html>
