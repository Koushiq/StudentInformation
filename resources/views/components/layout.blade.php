<html>
    <head>
        <title>@yield('pagetitle')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        @section('externalscript')
            
        @show
    </head>
    <body>
      

        <div>
            @yield('content')
        </div>
        
    </body>
</html>