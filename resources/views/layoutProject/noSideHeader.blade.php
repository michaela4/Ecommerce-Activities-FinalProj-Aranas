<!DOCTYPE html>
<html lang="en" ng-app="Calculate">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop Home - Merch-Ent</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap4.min.css" rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="/lib/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="/css/creative.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/blog-home.css" rel="stylesheet">
    <link href="/css/creative.css" rel="stylesheet">
    <link href="/css/myBlogStyle.css" rel="stylesheet">


    <!-- Temporary fix for navbar responsiveness -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" ng-controller="CalculateCtrl">

    @include('layoutProject.nav')

    <!-- Page Content -->
    <div class="container" id="section1">
        <div class="row">
            @yield('content')
         </div>
    </div>
    <!-- /.container -->

    @include('layoutProject.footer')

</body>

</html>
