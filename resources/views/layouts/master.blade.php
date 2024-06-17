<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css')}}/main.css"> <!-- link to css file located at public/assets/css/main.css-->
    <script src="main.js"></script>

</head>
<body>
   
@include('includes.header')
<!-- @include('includes.navbar') -->
<main>
    @include('includes.sidebar')
    <div class="content">
    @include('includes.content')  
    @yield('content')   
    <!-- @include('includes.article') -->
    </div>
</main>
<!-- @include('includes.footer') -->
</body>
</html>
