<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>@yield('title')</title>
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;1,400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">



  <!-- CSS only -->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
	<link href="{{asset('css/mdb.min.css')}}" rel="stylesheet" >
	<link href="{{asset('css/sidenav.css')}}" rel="stylesheet" >
    <link href="{{asset('css/style.css')}}" rel="stylesheet" >
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet" >
	<link href="{{asset('css/datatables.min.css')}}" rel="stylesheet" >
	<link href="{{asset('css/datatables-select.min.css')}}" rel="stylesheet" >
    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>


</head>
<body class="fix-header fix-sidebar">

@include('Layout.menu')




@yield('content')






</div>
</div>

<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.slimscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sidebarmenu.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sticky-kit.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.min-2.js')}}"></script>
<script type="text/javascript" src="{{asset('js/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/datatables-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/axios.min.js')}}"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>-->
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>


@yield('script')

</body>
</html>