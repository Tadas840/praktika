<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Pieno ūkis</a> 
            </div>
            <div id="logout"><a href="#" class="btn btn-danger square-btn-adjust">Atsijungti</a> </div>
            
        </nav>   
        
        <nav class="navbar-default navbar-side">
            <div class="sidebar-collapse">
                <ul class="nav">
					
                    <li>
                        <a id="navg"  href="/"><i class="fa fa-table fa-2x"></i>Sąrašas</a>
                    </li>
                     <li>
                        <a id="navg"  href="/species"><i class="fa fa-cow fa-2x"></i>Veislės</a>
                    </li>
                    <li>
                        <a id="navg"  href="/"><i class="fa fa-line-chart fa-2x"></i>Statistika</a>
                    </li>
                    <li>
                        <a id="navg"  href="/importdata"><i class="fa fa-plus fa-2x"></i>Duomenų Pridėjimas</a>
                    </li>
                      <li>
                        <a id="navg" href="/scan"><i class="fa fa-barcode fa-2x"></i>Skenuoti</a>
                    </li>
                 	                   

                </ul>
               
            </div>
            
        </nav> 
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">

                </div>  
                <hr />
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">           
                 </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">           
                 </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">           
                 </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">           
                 </div>
                </div> 
                
</body>
</html>