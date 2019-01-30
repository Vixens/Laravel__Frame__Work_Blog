<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield ('title','Laravel blog dashboard')</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/styles.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
    <link href="ckeditor/plugins/codesnippet/lib/highlight/styles/default.css" rel="stylesheet">
    <script src="ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>

</head>


   
<body class="sidebar-fixed header-fixed">
    <div class="page-wrapper">      
        @include('includes.navigation')
        <div class = "main-container">
        @include('includes.admin.sidebarNavigation')
               @include('includes.messages')
               @yield('content')
               
        </div>
   
    </div>
    
 
    
    <script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/carbon.js') }}"></script>
    <script src="{{ asset('admin/assets/js/demo.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
    <!-- Ckeditor -->
    
    <!-- cdn ckeditor4 -->
    <script src="https://cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>
     <script>
         CKEDITOR.replace( 'summary-ckeditor' );
    </script>
    <script src="ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>

</body>
</html>