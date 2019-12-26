<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
  </title>
  <!-- Favicon -->
  {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
@include('include.css')
</head>

<body class="">
 @include('include.sidebar')
  <div class="main-content">
    <!-- Navbar -->
   @include('include.navbar')
    <!-- End Navbar -->
    <!-- Header -->
   @include('include.header')
    <div class="container-fluid mt--7">
     @yield('content')
      <!-- Footer -->
   @include('include.footer')
  </div>
  </div>
@include('include.script')


  @yield('script')
</body>

</html>
