<!DOCTYPE html>
<html>
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
       

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
  
    <body>
       @yield('body')
    </body>
</html>
