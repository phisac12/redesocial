<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?> | Mike</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-3"><b>Cadastro</b></h1>

            </div>
        </div>
        <div class="row my-4">
            <img src="<?php echo base_url(); ?>fundos/cadastro.svg" alt="personage" height="150px">
        </div>
        <?php if ($this->session->flashdata("danger")) { ?>
            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-4">
                    <div class="alert alert-danger text-center" role="alert">
                        <?= $this->session->flashdata("danger"); ?>
                    </div>
                </div>
                <div class="col-4">

                </div>
            </div>
        <?php } ?>

        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">


                <form method="POST" action="cadastrar">

                    <div class="form-row row">
                        <div class="form-row align-items-center">
                            <div class="col-sm-5 d-grid gap-2 col-6 mx-auto my-2">
                                <input type="text" class="form-control" id="p_nome" name="p_nome" placeholder="Nome" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-row align-items-center">
                                <div class="col-sm-5 d-grid gap-2 col-6 mx-auto my-2">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-row align-items-center">
                                <div class="col-sm-5 d-grid gap-2 col-6 mx-auto my-2">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-row align-items-center">
                                <div class="col-sm-5 d-grid gap-2 col-6 mx-auto my-2">
                                    <input type="text" class="form-control" id="n_fantasia" name="n_fantasia" placeholder="Nome fantasia">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-5 d-grid gap-2 col-6 mx-auto my-1">
                                <label for="pergunta">Pergunta secreta</label>
                                <select id="pergunta" name="pergunta" class="form-control mb-3">
                                    <option selected="">Selecione...</option>
                                    <option>Primeira escola que estudei</option>
                                    <option>Meu primeiro mascote de estimação</option>
                                    <option>Minha comida preferida</option>
                                    <option>Minha cor favorita</option>
                                    <option>Minha banda preferida </option>
                                </select>
                                <input type="text" id="resposta" name="resposta" class="form-control mb-3" placeholder="Digite aqui sua resposta secreta">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-5 d-grid gap-2 col-6 mx-auto my-2">
                                <div class="form-check">
                                    <label class="form-check-label" for="termos">
                                        <input type="checkbox" class="form-check-input mb-3" name="termos" id="termos">Desejo receber novidades por e-mail
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-sm-12">
                                <div class="d-grid gap-2 col-4 mx-auto">
                                    <button class="btn btn-warning" type="submit">Cadastrar-se</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

    <div class="container" style="margin-top:145px;">
        <div class="row">
            <p class="lead text-center my-4">Já é cadastrado? <a href="login" class="text-center">Entre aqui</a></p>
        </div>

    </div>

</body>

</html>
