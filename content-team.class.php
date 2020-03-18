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
            <img src='$list_team_info[logo_team]' class='img-responsive col-6 mt-5'>
            <h4>$list_team_info[name_team]</h4>
          ";
           ?>

					<div class="row mt-3">
						<div class="col-4 black-default"><a href="#" class="black-default"><i class="material-icons">supervisor_account</i><br>Jogadores</a></div>
						<div class="col-4 black-default"><a href="#" class="black-default"><i class="material-icons">trending_up</i><br>Pontos</a></div>
						<div class="col-4 black-default"><a href="#" class="black-default"><i class="material-icons">verified_user</i><br>Desafios</a></div>
					</div>
					<hr>

					<h4>Jogadores</h4>
					<p class="text-muted">Seu time possui <strong><?php echo $count_players_team; ?></strong> jogadores</p>
					<a href="new-player.php" class="btn btn-outline-success btn-sm">Cadastrar novo jogador</a>

          <?php
            while($list_player_info = mysqli_fetch_array($get_player_info)){
              echo "
                <div class='row mt-5 mb-5 text-left'>
                  <div class='col-4'><a href='#' class='black-default'><img src='$list_player_info[photo_player]' class='img-responsive col-12'></div>
                  <div class='col-6'><a href='#' class='black-default'><strong>$list_player_info[name_player]</strong><br><span class='text-muted'><strong>$list_player_info[position_player]</strong></span></div>
                  <div class='col-2'><a href='player.php?id_player=$list_player_info[id_player]' class='text-success'><i class='material-icons mt-3'>add_circle_outline</i></a></div>
                </div>
              ";
            }
          ?>
				<!--	<div class="row mt-5 mb-5 text-left">
						<div class="col-4"><a href="#" class="black-default"><img src="imgs/football-player.png" class="img-responsive col-12"></div>
						<div class="col-6"><a href="#" class="black-default"><strong>Nome do Jogador</strong><br><span class="text-muted"><strong>GOL</strong></span></div>
						<div class="col-2"><a href="player.php" class="text-success"><i class="material-icons mt-3">add_circle_outline</i></a></div>
					</div>
					<div class="row mt-5 mb-5 text-left">
						<div class="col-4"><a href="#" class="black-default"><img src="imgs/football-player.png" class="img-responsive col-12"></div>
						<div class="col-6"><a href="#" class="black-default"><strong>Nome do Jogador</strong><br><span class="text-muted"><strong>MEI</strong></span></div>
						<div class="col-2"><a href="player.php" class="text-success"><i class="material-icons mt-3">add_circle_outline</i></a></div>
					</div> -->
				</div>
			</div>
		</div>
	</div>

</body>
</html>
