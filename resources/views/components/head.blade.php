    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
   
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
        <link rel="stylesheet" href="{{asset('plugins/neptune/datatables/datatables.min.css')}}">
        <link href="{{asset('plugins/neptune/perfectscroll/perfect-scrollbar.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/neptune/pace/pace.css')}}" rel="stylesheet">
    
        <script src="{{asset('js/mirrorfly/index.js')}}"></script>
        <script src="{{asset('js/mirrorfly/chat.js')}}"> </script>

        <script src="//unpkg.com/alpinejs" defer></script>

        @livewireScripts
	@livewireStyles
        <!-- Theme Styles -->
        
        <!-- Mode Switcher --> 
        <x-mode-switcher />
        <link href="{{asset('css/neptune/custom.css')}}" rel="stylesheet">
        
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/neptune/neptune.png')}}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/neptune/neptune.png')}}" /> 

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>