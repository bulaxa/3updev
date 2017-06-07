<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

        <title>Cliente - 3up</title>

        <!-- Bootstrap -->
        <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="/sistema/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form method="post" action="{{action('AdminController@login')}}">
                            <h1>Cliente 3up</h1>

                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div>
                                <input type="email" class="form-control" name="email" placeholder="Login" required="" />
                            </div>
                            <div>
                                <input type="password" name="password" class="form-control" placeholder="Senha" required="" />
                            </div>
                            <div>
                                <button  class="btn btn-default submit" type="submit">Login</button>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">


                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1><i class="fa fa-hand-peace-o "></i> 3up Comunicação!</h1>
                                    <p>©2017 All Rights Reserved. </p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>


            </div>
        </div>
    </body>
</html>


