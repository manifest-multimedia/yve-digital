    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
  
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>{{$title}}</title>
    
        <!-- Styles -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="{{asset('plugins/neptune/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/neptune/perfectscroll/perfect-scrollbar.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/neptune/pace/pace.css')}}" rel="stylesheet">
    
        
        <!-- Theme Styles -->
        <link href="{{asset('css/neptune/main.min.css')}}" rel="stylesheet">
        {{--
            include auto mode switcher module
             <link href="{{asset('css/neptune/darktheme.css')}}" rel="stylesheet"> 
             --}}
        <link href="{{asset('css/neptune/custom.css')}}" rel="stylesheet">
    
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/neptune/neptune.png')}}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/neptune/neptune.png')}}" />
       
        <script src="//unpkg.com/alpinejs" defer></script>
    
        @livewireScripts
        @livewireStyles
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container"> 
            <div class="col-md-12">
               
                {{$slot}}

            </div>
            <div class="col-md-12">

            </div>
        </div>
        <!-- Javascripts -->
        <script src="{{asset('plugins/neptune/jquery/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('plugins/neptune/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/neptune/perfectscroll/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('plugins/neptune/pace/pace.min.js')}}"></script>
        <script src="{{asset('js/neptune/main.min.js')}}"></script>
        <script src="{{asset('js/neptune/custom.js')}}"></script>
    </body>
    </html>
    