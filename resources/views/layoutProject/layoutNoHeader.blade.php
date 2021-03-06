<!DOCTYPE html>
<html lang="en" ng-app="Calculate">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop Home - Merch-Ent</title>

    <!--recently added-->
    <!-- Additional fonts for this theme -->
    <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="/lib/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="/css/creative.min.css" rel="stylesheet">


    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap4.min.css" rel="stylesheet">

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

<body ng-controller="CalculateCtrl">

    @include('layoutProject.nav')

    <!-- Page Content -->
    <div class="container">


        <div class="row">

            @yield('content')

            @include('layoutProject.side')

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    @include('layoutProject.footer')

</body>

</html>
