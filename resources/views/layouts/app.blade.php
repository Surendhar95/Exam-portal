<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
     <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
     {{ HTML::style('/css/bootstrap.min.css')}}
     {{ HTML::style('/css/style.css')}}
     

</head>

<header>
<div class='header'>
    <div><div>
        <div id='tit'>
            <h1 style='color:white'><b>EXAM PORTAL</b></h1>

        </div>  
</div>


</header>
<body >
<div style='position:absolute;top:90px;right:70px'>
       <a href='' style='color:white;text-decoration:none;font-size:15px'>Add Admin</a>
    </div>
    <div style='position:absolute;top:90px;right:190px'>
       <a href='' style='color:white;text-decoration:none;font-size:15px'>Home</a>
    </div>
    
</br>   </br></br></br></br></br></br></br></br></br>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
