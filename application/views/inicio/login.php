<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?> | Mike</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        body {
            background-image: linear-gradient(#73bfb8, #9f9fed, #736ced);
            background-repeat: no-repeat;
            background-size: 100%;

        }

        .form-log {

            background-color: #f5f3f4;
        }

        h1 {
            font-family: limonade;
            margin-left: 5%;
            color: white;
            text-shadow: black 0.1em 0.1em 0.4em
        }

        p {
            color: white;
        }

        p a {
            text-decoration: none;
            color: black;
        }

        p a:hover {
            border: 3px solid black;
            border-radius: 8px;
            transition: .5s;
            background-color: #14213d;
            color: white;
        }


        @font-face {
            font-family: milkyNice;
            src: url('fonts/Milkynice/MilkyNice-Clean.otf');

            font-family: limonade;
            src: url('fonts/limonade/LEMONMILK-Bold.otf');
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <h1 class="display-3 text-center my-5">Mike Social</h1>
            </div>
            <div class="col-2">

            </div>

        </div>
        <div class="row my-5 animate__animated animate__pulse animate__infinite	infinite animate__slow	.5s">
            <img src="<?php echo base_url(); ?>fundos/pc2.svg" alt="personage" height="200px">
        </div>
        <?php if ($this->session->flashdata("danger")) { ?>
            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-4">
                    <div class="alert alert-danger text-center" role="alert">
                        Email ou senha incorretos
                    </div>
                </div>
                <div class="col-4">

                </div>
            </div>

        <?php } ?>
        <form action="<?= base_url() ?>login/home" method="POST">
            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-sm-4">
                    <input class="form-control form-control-lg form-log my-2" type="email" name="email" placeholder="Email" onblur="validacaoEmail(f1.email)"  maxlength="60" size='65'>
                    <input class="form-control form-control-lg form-log" type="password" name="password" placeholder="Senha">
                </div>
                <div class="col-4">
                    <!-- Vazio -->
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-12 mt-4">
                    <div class="d-grid gap-2 col-2 mx-auto">
                        <button class="btn btn-warning mb-5" type="submit">Logar</button>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <div class="container">
        <div class="row" style="margin-top:201px;">
            <p class="lead text-center my-4">Ainda não tem conta? <a href="cadastro" class="text-center">Cadastre-se aqui</a></p>
        </div>

    </div>



</body>


</html>
