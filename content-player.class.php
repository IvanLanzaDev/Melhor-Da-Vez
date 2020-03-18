<?php
  include("functions.class.php");
  include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="container-posts col-12 mt-2">
				<div class="content-posts col-12 text-center">
          <?php
            echo "
              <img src='$list_view_player[photo_player]' class='img-responsive col-6 mt-5 mb-5'>
    					 <h4>$list_view_player[name_player]</h4>
    					<span class='text-muted'><strong>$list_view_player[position_player]</strong></span>
            ";
          ?>

					<div class="row mt-3">
						<div class="col-4 black-default"><a href="#" class="black-default"><strong>00</strong><br>Gols</a></div>
						<div class="col-4 black-default"><a href="#" class="black-default"><strong>00</strong><br>Faltas</a></div>
						<div class="col-4 black-default"><a href="#" class="black-default"><strong>00</strong><br>Partidas</a></div>
					</div>
					<hr>
					<div class="row mt-3">
						<div class="col-4 black-default"><a href="#" class="black-default"><strong>00</strong><br>Amarelos</a></div>
						<div class="col-4 black-default"><a href="#" class="black-default"><strong>00</strong><br>Vermelhos</a></div>
						<div class="col-4 black-default"><a href="#" class="black-default"><strong>00</strong><br>Expulsões</a></div>
					</div>


					<h4 class="mb-3 mt-5">Dados do jogador</h4>

					<small class="text-center">
						<p>
							<strong>Cidade</strong> <span class="text-muted"><?php echo $list_view_player[city_player]; ?></span>&nbsp;&nbsp;&nbsp;
							<strong>Estado</strong> <span class="text-muted"><?php echo $list_view_player[state_player]; ?></span>
						</p>
					</small>

					<small class="text-center">
						<p>
							<strong>Pais</strong> <span class="text-muted"><?php echo $list_view_player[country_player]; ?></span>&nbsp;&nbsp;&nbsp;
							<strong>Altura</strong> <span class="text-muted"><?php echo "$list_view_player[height_player]m"; ?></span>
						</p>
					</small>
					<small class="text-center">
						<p>
							<strong>Peso</strong> <span class="text-muted"><?php echo "$list_view_player[weight_player]kg"; ?></span>&nbsp;&nbsp;&nbsp;
							<strong>Camisa</strong> <span class="text-muted"><?php echo $list_view_player[number_player]; ?></span>
						</p>
					</small>
          	<small class="text-center"><p><strong>Idade</strong> <span class="text-muted"><?php echo $list_view_player[age_player]; ?></span></p></small>
					<div class="row mt-4 mb-4">
						<a href="#" class="btn btn-outline-success btn-block btn-lg">Editar informações</a> &nbsp;
						<a href="#" class="btn btn-danger btn-block mt-0 btn-lg">Excluir Jogador</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
