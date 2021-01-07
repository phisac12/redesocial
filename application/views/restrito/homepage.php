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
			background-image: linear-gradient(#caf0f8, #90e0ef, #0096c7, #03045e);
			background-repeat: no-repeat;
        }

        h1 {
            font-family: code;
            color: black;
        }

        @font-face {
            src: url('fonts/code/CODE_Bold.otf');
            font-family: code;
        }

        .bcentral {
            background-color: white;
        }

        .nomeuser {
            color: black;
        }

		.btn-sair{
			margin-right:10px;
		}
		h5{
			color:white;
			font-size:23px;
		}
		.perfilUser{
			text-decoration: none;
		}
		nav{
			position:fixed!important;
			width:100%;
			z-index: 100;
		}

    </style>
</head>

<body>

<?php

    permission();

?>

<div class="tudo" id="conteudo">

    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark" style="top:0;">
        <a class="navbar-brand" href="#">
            <img src="fundos/logo.png" width="30" height="30" class="d-inline-block align-top" style="margin-left:10px;" alt="">
            Mike | Restrito
        </a>
		<a href="homepage" class="perfilUser">
			<h5><?= $this->session->userdata['logged_user']['n_fantasia']; ?></h5>
		</a>

        <a href="<?= base_url() ?>Login/logout" class="btn-sair">
            <button class="btn btn-warning">Sair</button>
        </a>
    </nav>

	<div class="container" style="margin-top: 57px;">
		<div class="row">
			<div class="col-1">

			</div>

			<div class="col-10 bcentral">
				<form action="publicar" method="POST" enctype="multipart/form-data">
					<?php if ($this->session->flashdata("danger")) { ?>
						<div class="row">
							<div class="col-4">

							</div>
							<div class="col-4">
								<div class="alert alert-danger text-center mt-2" role="alert">
									Você precisa preencher algo ..
								</div>
							</div>
							<div class="col-4">

							</div>
						</div>

					<?php } ?>
					<input class="form-control mt-3" name="postagem" id="postagem" type="text">
					<div class="row">
						<div class="col-2">
							<button type="submit" class="btn btn-primary my-3">Publicar</button>
						</div>
						<div class="col-10">
							<input class="form-control my-3" type="file" name="envFoto"  accept="image/png, image/jpeg, image/jpg, image/gif">
						</div>
					</div>
				</form>
				<?php foreach ($publicacoes as $p){        ?>
					<div class="row mt-5">
						<div class="card">
							<h5 class="card-header nomeuser"><?php echo $p->n_fantasia;?></h5>
							<div class="card-body">
								<p class="card-text text-center lead"><b><?php echo json_decode($p->postagem); ?></b></p>
								<?php if($p->fotos != null){ ?>
										<center>
											<img src="<?= base_url()."./photos/" . $p->fotos; ?>" alt="" width="400" style="border-radius: 10px;">
										</center>

								<?php } ?>
							</div>
							<div>
								<p style="float:right; font-size:12px;"><?= (new DateTime($p->data))->format(' H:i d/m/y'); ?></p>
							</div>

						</div>
					</div>

				<?php } ?>

			</div>
				<div class="col-1">

				</div>


		</div>
	</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous">

</script>

</html>
