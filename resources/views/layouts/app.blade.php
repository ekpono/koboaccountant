<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Koboaccountant</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="koboaccountant, accounting, kobo, Nigeria accounting, Nigeria accountant, accountant Nigeria, Lekki accountant, Lagos accountant, Naija accountant" name="keywords">
  <meta content="" name="keywords">
  <meta content="koboaccountant, accounting, kobo, Nigeria accounting, Nigeria accountant, accountant Nigeria, Lekki accountant, Lagos accountant, Naija accountant" name="description">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <link href="https://res.cloudinary.com/syfon/image/upload/v1536857508/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Englebert:300,400,500,700|Iceberg:300,400,500,700|Overpass:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Bootstrap CSS File -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
 
  
  {{-- <script type="text/javascript" src="{{ URL::to('js/main.js') }}"></script> --}}

    
</head>
<body>
       <!-- Header -->
       @include('layouts.header')
        
      
        <!-- include main content --->
        
                @yield('content')
        

        <!-- Footer -->
       @include('layouts.footer')
              

  
  </body>
</html>