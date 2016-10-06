<!DOCTYPE html>
<html lang="en">

<head>
<meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}"/>
@include('templates.mobirise.header')
<head>
  
<body>

@yield('content')

@include('templates.mobirise.footer')

</body>
</html>
