<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>3up - Admin | </title>

        <!--###############PRINCIPAL#################-->

        <!-- Bootstrap -->
        <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="/css/font-awesome.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="/sistema/css/custom.min.css" rel="stylesheet">

        <!--#########################################-->


    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @include('layout.menu')

                @yield('conteudo')
            </div>
            <footer>
                <div class="pull-right">
                    <a href="http://3upcomunicacao.com.br/"> 3up Comunicação</a>
                </div>
                <div class="clearfix"></div>
            </footer>
        </div>

        <!-- jQuery -->
        <script src="/js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="/sistema/js/custom.min.js"></script>

    </body>
</html>
