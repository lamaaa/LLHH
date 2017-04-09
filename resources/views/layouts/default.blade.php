<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">  

<!-- 导航图标 !-->
    <link rel="icon" href="favicon.ico">

<!-- 注释掉的.css文件-->
    <!--<link rel="stylesheet" href="/css/app.css">-->
    <title>@yield('title', 'LLHH')</title>

    <!-- Bootstrap core css !-->
     <link href="/css/dist/bootstrap.min.css" rel="stylesheet">
       <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/css/assets/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/js/assets/ie-emulation-modes-warning.js"></script>

    <!-- Custom styles for this template -->
    <link href="/css/my/carousel.css" rel="stylesheet">
    <link herf="/css/my/signin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/my/mystyle.css">
</head>
    <body>

            @include(('layouts._header'))
            @include('shared.messages')
            @yield('content')
            @include(('layouts._footer'))

            <!-- Bootstrap core JavaScript
    ================================================== -->
    <!--更新jquery.js文件-->
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/js/myjs/myJsStyle.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/assets/vendor/jquery.min.js"><\/script>')</script>
    <script src="/js/dist/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/js/assets/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/assets/ie10-viewport-bug-workaround.js"></script>
    <!--答案弹框!而引入的工具js-->
    <script src="/js/assets/tooltip.js"></script>  
    <script src="/js/assets/popover.js"></script>       
    </body>
</html>