<!doctype html>
<html lang="en" dir="ltr">

<!--  USA CARS Import Backend -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="shortcut icon" type="image/x-icon" href="assets/images/apple-touch-icon.ico"/>

<title>USA CARS Import Center</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Plugins css -->
<link rel="stylesheet" href="assets/plugins/charts-c3/c3.min.css"/>

<!-- Core css -->
<link rel="stylesheet" href="assets/css/main.css"/>
<link rel="stylesheet" href="assets/css/theme1.css"/>

<!-- Font Awesome Icons-->
<script src="https://kit.fontawesome.com/d6bfc212a4.js" crossorigin="anonymous"></script>
</head>

<body class="font-montserrat">
<div id="fb-root"></div>
<script>
(function (d, s, id){
    var js, fjs =d.getElementsByTagName(s)[0];
    if(d.getElementById(id)) return ;
    js= d.createElement(s); js.id=id;
    js.src="//connect.facebook.net/en_US/sdk" 
}

)
</script>


<div id="main_content">
        <!-- Header -->
        @include('template.navleft') 
        <!-- End Header -->

        <div class="page">

        <!-- Nav Top -->
        @include('template.navtop')
        <!-- End Nav Top-->

        <!-- Main Content  -->
        @yield('main-content')
        <!-- End Main Content -->
        
        <!-- End Nav Top-->
        @include('template.footer')
        <!-- End Footer-->
    </div>    
    <!-- End Main Container -->
    <script src="assets/bundles/lib.vendor.bundle.js"></script>

    <script src="assets/bundles/apexcharts.bundle.js"></script>
    <script src="assets/bundles/counterup.bundle.js"></script>
    <script src="assets/bundles/knobjs.bundle.js"></script>
    <script src="assets/bundles/c3.bundle.js"></script>

    <script src="assets/js/core.js"></script>
    <script src="assets/js/page/project-index.js"></script>

</body>


</html>
